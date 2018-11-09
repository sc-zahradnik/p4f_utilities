<?php
namespace P4F\Components\Utilities\abstracts;

use Exception;
use P4F\Components\Utilities\Arrays;
use P4F\Components\Utilities\ArrayObject;
use P4F\Components\Utilities\Container;

abstract class Collection extends Container{
    public function __construct($array = []){
        if (!defined(get_class($this)."::CLASS_NAME")) {
            //todo: (0) vytvořit konkrétní Exception nebo list s chybovými texty
            throw new Exception("Collection class (".get_class($this).") expect constant CLASS_NAME with name of collected objects.");
        }

        if (!empty($array)) {
            if (Arrays::isArray($array)) {
                foreach ($array as $key => $obj) {
                    $cls = constant(get_class($this)."::CLASS_NAME");
                    if (!$this->valid($obj)) {
                        //todo: (0) vytvořit konkrétní Exception nebo list s chybovými texty
                        throw new Exception("Unexpected ".gettype($obj)." on key ".$key." in array. Collection (".get_class($this).") expect array of objects (".$cls.").");
                    }
                }

                if ($array instanceof ArrayObject) {
                    $array = $array->all();
                }

                parent::__construct($array);
            }
        }
    }

    /**
     * Zkontroluje zda předaná hodnota je instance požadované třídy a přidá do seznamu.
     * @param   self::CLASS_NAME  $obj  Instance třídy nastavené v konstantě CLASS_NAME
     * @param   mixed             $key  Nutnost kvůli přetížení metody. Pro tento případ není klíč postatný.
     * @return  void
     */
    public function set($obj, $key = null): void{
        if (!$this->valid($obj)) {
            $this->createUnexpectedValueException();
        }
        parent::set($obj);
    }


    /**
     * Alias k set
     */
    public function push($obj, $key = null): void{
        if (!$this->valid($obj)) {
            $this->createUnexpectedValueException();
        }
        parent::push($obj);
    }

    /**
     * Alias k set
     */
    public function add($obj, $key = null): void{
        if (!$this->valid($obj)) {
            $this->createUnexpectedValueException();
        }
        parent::add($obj);
    }

    /**
     * Kontroluje zda předaná hodnota je instancí požadované třídy.
     * @param  self::CLASS_NAME  $value Instance třídy nastavené v konstantě CLASS_NAME
     * @return bool
     */
    protected function valid($value): bool{
        $cls = constant(get_class($this)."::CLASS_NAME");
        return $value instanceof $cls;
    }

    /**
     * Vytvoří vyjimku při s chybovou zprávou.
     * V kolekci "X" při volání metody "Y" nebyla předaná hodnota instancí požadované třídy.
     * @return void
     */
    protected function createUnexpectedValueException(): void{
        $cls = constant(get_class($this)."::CLASS_NAME");

        $trace = debug_backtrace();
        $method = $trace[Arrays::firstKey($trace)]['function'];

        //todo: (0) vytvořit konkrétní Exception nebo list s chybovými texty
        throw new Exception(get_class($this)."::".$method." expect object (".$cls.").");
    }
}
