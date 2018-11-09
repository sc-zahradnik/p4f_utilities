<?php
namespace P4F\Components\Utilities\traits\Arrays;

trait Find{
    //todo: (0) dořešit case insensitive vyhledávání
    /**
     * Search array values for searched value.
     * @param  array         $array   Data for searching.
     * @param  mixed         $value   Searched value.
     * @param  bool|boolean  $strict  True = case sensitive, False = case insensitive
     * @return mixed                  Return finded value or false.
     */
    public static function find(array $array, $value, bool $strict = true){
        return (($key = self::search($array, $value)) !== false) ? $array[$key] : false;
    }
}
