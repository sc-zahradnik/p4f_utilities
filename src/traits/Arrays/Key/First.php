<?php
namespace P4F\Components\Utilities\traits\Arrays\Key;

use P4F\Components\Utilities\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.array-key-first.php
 */
trait First{
    /**
     * Gets the first key of an array
     * @param  array  $array    An array
     * @return mixed            Returns the first key of array if the array is not empty; NULL otherwise.
     */
    public static function firstKey(array $array){
        if ((float)phpversion() >= 7.3) {
            return array_key_first($array);
        }

        $keys = Arrays::keys($array);
        if (count($keys)) {
            return $keys[0];
        }
        return null;
    }


    /////////////
    // Aliases //
    /////////////

    public static function first_key($array){
        return self::firstKey($array);
    }
    public static function firstIndex($array){
        return self::firstKey($array);
    }
    public static function first_index($array){
        return self::firstKey($array);
    }
}
