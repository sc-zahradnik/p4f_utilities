<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.each.php
 */
trait Each{
    /**
     * Return the current key and value pair from an array and advance the array cursor.
     * @param  array  &$array  The input array.
     * @return array           Returns the current key and value pair from the array array. This pair is returned in
     *                         a four-element array, with the keys 0, 1, key, and value. Elements 0 and key contain
     *                         the key name of the array element, and 1 and value contain the data.
     *                         If the internal pointer for the array points past the end of the array contents, each()
     *                         returns FALSE.
     */
    //todo: (0) test returns FALSE
    public static function each(array &$array): ?array{
        return each($array);
    }


    //////////////
    // Aliasses //
    //////////////

    public static function forEach(array &$array){
        return call_user_func_array([self, "each"], $array);
    }
}
