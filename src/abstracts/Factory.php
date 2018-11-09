<?php
namespace P4F\Components\Utilities\abstracts;

use Exception;
use P4F\Components\Utilities\interfaces\Factory as IFactory;

class Factory implements IFactory{
    public static function create(){
        if (!defined(get_called_class()."::CLASS_NAME")) {
            throw new Exception("Factory class (".get_called_class().") expect constant CLASS_NAME with name of class.");
        }

        return get_defined_constants(get_called_class()::CLASS_NAME);
    }
}
