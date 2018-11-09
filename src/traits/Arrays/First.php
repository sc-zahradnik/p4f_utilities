<?php
namespace P4F\Components\Utilities\traits\Arrays;

trait First{
    /**
     * Return first element in array.
     * @param  array  $array  The array
     * @return mixed          First element.
     */
    public static function first(array $array){
        $keys = array_keys($array);
        if (array_key_exists($keys[0], $array)) {
            return $array[$keys[0]];
        }
    }
}
