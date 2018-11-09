<?php
namespace P4F\Components\Utilities\traits;

trait Singleton{
    /**
     * @var object
     */
    protected static $instance;

    /**
     * Vrátí instanci volané třídy. Vytvoří instace v případě, že ještě nebyla vytvořena.
     * @return object  Instance volané třídy.
     */
    public static function &getInstance(){
        $className = get_called_class();
        if (!(self::$instance instanceof $className)) {
            self::$instance = new $className;
        }
        return self::$instance;
    }
}
