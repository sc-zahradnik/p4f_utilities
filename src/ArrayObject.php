<?php
namespace P4F\Components\Utilities;

use ArrayAccess;
use Exception;
use Iterator;

use P4F\Components\Utilities\traits\Iterator as TIterator;
use P4F\Components\Utilities\traits\ArrayAccess as TArrayAccess;
use P4F\Components\Utilities\traits\ArrayObject\Unique as TUnique;

class ArrayObject implements ArrayAccess, Iterator{
    use TArrayAccess;
    use TIterator;
    use TUnique;

    /**
     * Iterátor
     * @var integer
     */
    private $position = 0;

    /**
     * Pole dat
     * @var array
     */
    protected $data = [];

    /**
     * Pole klíčů
     * @var array
     */
    protected $keys = [];

    public function __construct($array = []) {
        if (defined(get_class($this)."::RESOURCE")) {
            $resource = get_class($this)::RESOURCE;
            global $$resource;
            $this->data = &$$resource;
            return;
        }
        if (empty($array)) {
            return;
        }
        if (is_array($array)) {
            foreach ($array as $key => $value) {
                if (is_array($value)) {
                    $value = new self($value);
                }
                $this->data[$key] = $value;
            }
            $this->keys = Arrays::keys($array);
        } elseif ($array instanceof ArrayObject) {
            $this->data[] = $array;
            $this->keys = $this->keys();
        } else {
            //todo: (0) vytvořit konkrétní Exception nebo list s chybovými texty
            throw new Exception("Argument 1 passed to P4F\Components\Utilities\ArrayObject::__construct() must be of the type array or ArrayObject. ".ucfirst(gettype($array))." given", 1);
        }
        $this->position = Arrays::firstKey($this->keys, true);
    }

    /**
     * Přesměruje volání neexistujících metod na třídu Arrays.
     * Třídě Arrays vždy jako první parameter předvá obsah vlastnosti data.
     * @param  string $name       Volaná metoda
     * @param  array  $arguments  Pole argumentů předaných volané metodě.
     * @return [type]             [description]
     */
    public function __call(string $name, array $arguments) {
        if (method_exists((new Arrays), $name)) {
            $arguments[-1] = $this->data;
            ksort($arguments);
            $arguments = Arrays::Values($arguments);
            $return = call_user_func_array(__namespace__."\Arrays::".$name, $arguments);
            if (isset($return)) {
                return $return;
            } else {
                return $this;
            }
        } else {
            //todo: (0) vytvořit konkrétní Exception nebo list s chybovými texty
            throw new \Exception("Method \"".$name."\" doesn't exist in class P4F\Components\Utilities\Arrays");
        }
    }

    public function __get($key) {
        if (empty($key)) {
            return $this->data;
        }
        return $this->data[$key];
    }

    /**
     * Převede obsah do klasického pole.
     * @return array Klasické pole
     */
    public function toArray(): array{
        $array = [];
        foreach ($this->data as $key => $value) {
            if ($value instanceof ArrayObject) {
                $array[$key] = $value->toArray();
            } else {
                $array[$key] = $value;
            }
        }
        return $array;
    }
}
