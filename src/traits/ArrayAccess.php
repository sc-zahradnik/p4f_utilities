<?php
namespace P4F\Components\Utilities\traits;

use P4F\Components\Utilities\Arrays;

trait ArrayAccess{
    /**
     * Kontroluje zda požadovaný klíč existuje v poli
     * @param  number|string  $key  Kontrolovaný klíč
     * @return bool
     */
    public function offsetExists($key): bool{
        if (defined(get_class($this)."::RESOURCE")) {
            $resource = get_class($this)::RESOURCE;
            global $$resource;
            $data = &$$resource;
        } else {
            $data = &$this->data;
        }
        return Arrays::keyExists($data, $key);
    }

    /**
     * Vrátí hodnotu v poli pro požadovaný klíč.
     * @param  number|string  $key  Požadovaný klíč.
     * @return mixed
     */
    public function offsetGet($key){
        if (defined(get_class($this)."::RESOURCE")) {
            $resource = get_class($this)::RESOURCE;
            global $$resource;
            $data = &$$resource;
        } else {
            $data = &$this->data;
        }
        $keys = explode("/", trim($key, "/"));
        return ($this->offsetExists($key))? $this->getSubData($data, $keys): null;
    }

    /**
     * Projde podúrovně pole podle zadaného klíče.
     *     array [
     *         [1, 2, 3],
     *         [4, 'test' => 5, 6],
     *     ]
     *     array->get("1/test"); == array->get("1")->get("test"); == 5,
     *     array->get("0"); == [1, 2, 3],
     * @param  [type] $array [description]
     * @param  [type] &$keys [description]
     * @return [type]        [description]
     */
    protected function getSubData($array, &$keys){
        foreach ($keys as $index => $key) {
            unset($keys[$index]);
            if (count($keys)) {
                return $this->getSubData($array[$key], $keys);
            } else {
                return $array[$key];
            }
        }
    }
    /**
     * Alias pro offsetGet
     */
    public function get($key) {
        return $this->offsetGet($key);
    }

    /**
     * Vrátí obsah vlastnosti data.
     * @return array
     */
    public function all(): array{
        if (defined(get_class($this)."::RESOURCE")) {
            $resource = get_class($this)::RESOURCE;
            global $$resource;
            return $$resource;
        } else {
            return $this->data;
        }
    }

    /**
     * [offsetSet description]
     * @param  number|string  $key   Klíč pod kterým má být hodnota v poli nastavena.
     * @param  mixed          $value Hodnota která má být do pole přidána.
     * @return self
     */
    public function offsetSet($key, $value){
        if (defined(get_class($this)."::RESOURCE")) {
            $resource = get_class($this)::RESOURCE;
            global $$resource;
            $data = &$$resource;
        } else {
            $data = &$this->data;
        }

        $data = $this->setValue($data, $key, $value);
        $this->keys = $this->keys();
        return $this;

        if (strpos($key, "/") !== false) {
            $this->setSubKeyValue($data, $key, $value);
        } else {
        }

        if (is_null($key)) {
            $data[] = $value;
            $lstKey = Arrays::lastKey($data);
        } else {
            $data[$key] = $value;
            $lstKey = $key;
        }
        if (!Arrays::keyExists($this->keys, $lstKey)) {
            $this->keys[] = $lstKey;
        }
        return $this;
    }

    /**
     * Nastaví hodnotu do podklíče.
     *     $ar->push("no key");              // DATA[] = "no key";
     *     $ar->push("single key", "keyA");  // DATA['keyA'] = "single key";
     *     $ar->push("Ahoj", "key/keyb/");   // DATA[key][keyb][] = "Ahoj";
     *     $ar->push("Ahoj", "/key/keyb");   // DATA[][key][keyb] = "Ahoj";
     *     $ar->push("Ahoj", "key//keyb");   // DATA[key][][keyb] = "Ahoj";
     *     $ar->push("Ahoj", "/key//keyb/"); // DATA[][key][][keyb][] = "Ahoj";
     * @param array          $data  Pole dat, do kterého má být hodnota přidána.
     * @param number|string  $keys  Klíč, pod kterým má být hodnota přidána.
     * @param mixed          $value Hodnota, která bude do pole přidána,
     * @param bool           $frst  Určení zda jde o první iteraci. !Pro interní použití!
     */
    protected function setSubKeyValue($data, $keys, $value, $frst = true){
        if (count($keys)) {
            $key = $keys[0];
            unset($keys[0]);
            $keys = Arrays::values($keys);

            if (strlen($key) == 0) {
                $key = null;
            }

            if (is_null($key)) {
                if (!Arrays::isArray($data)) {
                    $data = [null];
                } else {
                    $data[] = null;
                }
                if ($data instanceof self) {
                    $key = $data->lastKey();
                } else {
                    $key = Arrays::lastKey($data);
                }
                $subData = $data[$key];
            } else {
                if ($data instanceof self) {
                    if ($data->keyExists($key)) {
                        $subData = $data[$key];
                    } else {
                        $data->push(null, $key);
                    }
                } elseif (!Arrays::isArray($data)) {
                    $data = [$key => null];
                } elseif (!Arrays::keyExists($data, $key)) {
                    $data[$key] = null;
                }
                $subData = $data[$key];
            }

            $tmpData = $this->setSubKeyValue($subData, $keys, $value, false);

            if (Arrays::isArray($tmpData)) {
                if (!($tmpData instanceof self)) {
                    $tmpData = new self($tmpData);
                }
            }
            $data[$key] = $tmpData;
            return $data;
        } else {
            return $value;
        }
    }

    public function setValue($data, $key, $value){
        if (is_string($key)) {
            $keys = explode("/", $key);
        }

        if (!empty($keys)) {
            $data = $this->setSubKeyValue($data, $keys, $value);
        }

        return $data;
    }

    /**
     * Alias pro offsetSet
     */
    public function set($value, $key = null){
        $this->offsetSet($key, $value);
        return $this;
    }

    /**
     * Alias pro offsetSet
     */
    public function push($value, $key = null) {
        $this->offsetSet($key, $value);
        return $this;
    }

    /**
     * Alias pro offsetSet
     */
    public function add($value, $key = null){
        $this->offsetSet($key, $value);
        return $this;
    }

    //todo: (0) dodělat unset podle podklíče stejně jako nastavení hodnoty podle podklíče "key/keyb"
    /**
     * Smaže klíč v poli.
     * @param  number|string  $key
     * @return self
     */
    public function offsetUnset($key) {
        if (defined(get_class($this)."::RESOURCE")) {
            $resource = get_class($this)::RESOURCE;
            global $$resource;
            $data = &$$resource;
        } else {
            $data = &$this->data;
        }
        unset($data[$key]);
        return $this;
    }

    /**
     * Alias pro offsetUnset
     */
    public function unset($key){
        return $this->offsetUnset($key);
    }
}
