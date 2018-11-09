<?php
namespace P4F\Components\Utilities\traits\Arrays\Key;

use P4F\Components\Utilities\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.array-key-last.php
 */
trait Last{
    /**
     * Gets the last key of an array
     * @param  array  $array    An array
     * @return mixed            Returns the last key of array if the array is not empty; NULL otherwise.
     */
    public static function lastKey(array $array){
        if ((float)phpversion() >= 7.3) {
            return array_key_last($array);
        }

        $keys = Arrays::reverse(Arrays::keys($array));
        if (count($keys)) {
            return $keys[0];
        }
        return null;
    }


    /////////////
    // Aliases //
    /////////////

    public static function last_key($array){
        return self::lastKey($array);
    }
    public static function lastIndex($array){
        return self::lastKey($array);
    }
    public static function last_index($array){
        return self::lastKey($array);
    }
}
