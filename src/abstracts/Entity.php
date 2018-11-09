<?php
namespace P4F\Components\Utilities\abstracts;

use Exception;
use P4F\Components\Utilities\Arrays;
use P4F\Components\Utilities\ArrayObject;
use P4F\Components\Utilities\Container;

//todo: (0) rozšířit o ArrayAccess a Iterator
abstract class Entity{
    const REGEX_SETTER_GETTER = "/^([sg]{1}et|add)(.*)/";
    const REGEX_SNAKECASE = "/.*_.*/";
    const REGEX_UPPERCASE = "/[A-Z]/";
    const REGEX_UPPERCASE_STASH = "/([A-Z])/";

    public function __construct($data = null) {
        $this->fill($data);
    }

    /**
     * Zpracuje volanou metodu a provede následující operace.
     *     setProperty("test"):
     *         Set value "test" into property "Property".
     *     addProperty("test"):
     *         Add new value "test" into array property "Property".
     *         Property must by array.
     *     getProperty():
     *         Return value of property "Property".
     * @param  string  $method     Called entity method
     * @param  array   $arguments  Arguments of called entity methods
     * @return void
     */
    public function __call($method, $arguments){
        $tmp = $method;
        list($method, $property) = $this->parseMethodName($method);

        if (is_null($method) && is_null($property)) {
            $method = $tmp;
            $property = $arguments[0];
            $value = $arguments[1];
        } else {
            if (isset($arguments[0])) {
                $value = $arguments[0];
            } else {
                $value = null;
            }
        }


        $properties = $this->getProperties();

        if ($properties->inArray(lcfirst($property)) || $properties->inArray(ucfirst($property))) {
            if ($properties->inArray(lcfirst($property))) {
                $property = lcfirst($property);
            } elseif ($properties->inArray(ucfirst($property))) {
                $property = ucfirst($property);
            }
            switch ($method) {
                case 'set':
                    //todo: (0) asi pořešit možnost přidání/práce s containerem
                    if (Arrays::isArray($this->$property) && !Arrays::isArray($value)) {
                        $this->$property = new Container([$value]);
                    } else {
                        $this->$property = $value;
                    }
                return $this;
                break;
                case 'add':
                    if (Arrays::isArray($this->$property)) {
                        $array = $this->$property;
                        $array[] = $value;
                        $this->$property = $array;
                        return $this;
                    }
                break;
                case 'get':
                return $this->$property;
                break;
            }
        } else {
            throw new Exception("Property (".get_class($this)."::$".$property.") does not exist.", 1);
        }
    }

    /**
     * @return string json encoded properties
     */
    public function __toString(){
        return json_encode(get_object_vars($this));
    }

    //todo: (0) zvalidovat funkčnost
    /**
     * @return ArrayObject entity properties in array
     */
    public function toArray(){
        $data = $this->getProperties(true);
        foreach ($data as $property => $value) {
            if (is_null($value)) {
                unset($data[$property]);
            }
            if (Arrays::isArray($value) && count($value) > 0) {
                $data[$property] = $this->prepareSubData($value);
            } elseif ($value instanceof Entity) {
                $data[$property] = $value->toArray();
            }
        }
        return $data;
    }

    /**
     * Vrátí pole vlastností nebo pole s hodnotama kde klíčem pro hodnotu je název vlastnosti.
     * @param  boolean  $values
     *                             true = return array of properties with values
     *                                 where array key is property name
     *                                 and array value is property value
     *                             false = return array of properties
     *                                 where array value is property name
     * @return ArrayObject
     */
    public function getProperties(bool $values = false): ArrayObject{
        if ($values === true) {
            return new ArrayObject(get_object_vars($this));
        } else {
            return new ArrayObject(Arrays::keys(get_object_vars($this)));
        }
    }

    /**
     * Naplní vlastnosti entity daty z pole.
     * @param  array|ArrayObject  $data  Pole dat pro naplnění vlastností entity
     * @return void
     */
    public function fill($data): void{
        if (Arrays::isArray($data)) {
            $properties = $this->getProperties();
            foreach ($data as $key => $value) {
                if ($this->getProperties()->inArray($key)) {
                    if (Arrays::isArray($value) && !($value instanceof ArrayObject)) {
                        $value = new Container($value);
                    }
                    call_user_func_array([$this, "set".ucfirst($key)], [$value]);
                }
            }
        }
    }

    // todo: (0) doplnit doc
    /**
     * @param  array $array
     * @return array
     */
    protected function prepareSubData($array){
        foreach ($array as $key => $value) {
            if (Arrays::isArray($value)) {
                $array[$key] = $this->prepareSubData($value);
            }
            if ($value instanceof Entity) {
                $array[$key] = $value->toArray();
            }
        }
        return $array;
    }

    /**
     * Parse called setter & getter method to real method and property
     * @param  string      $methodName  Called method to parse.
     * @return array|null               return array with method and property or null
     */
    protected function parseMethodName(string $methodName): ?array{
        if (preg_match(self::REGEX_SETTER_GETTER, $methodName, $methodMatches)) {
            $method = $methodMatches[1];
            $property = $methodMatches[2];

            //todo: (0) rozhodnout zda bude řešit snakecase nebo ne
            // viděl bych to tak, že si to bude řešit až daná extenze
            // pro všechny extenze musí methoda být jako vlastnost
            // pro db table row musí být převod na snakecase
            return [$method, $property];
            if (preg_match(self::REGEX_SNAKECASE, $methodName)) {
                return [$method, $property];
            } elseif (preg_match_all(self::REGEX_UPPERCASE, $property)) {
                $property = preg_replace(self::REGEX_UPPERCASE_STASH, "_$1", $property);

                $property = trim($property, "_");
                $property = strtolower($property);

                return [$method, $property];
            }
        }
        return null;
    }
}
