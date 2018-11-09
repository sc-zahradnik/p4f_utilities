<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.end.php
 */
trait End{
    /**
     * Set the internal pointer of an array to its last element.
     * @param  array  &$array  The array. This array is passed by reference because it is modified by the function.
     *                         This means you must pass it a real variable and not a function returning an array
     *                         because only actual variables may be passed by reference.
     * @return mixed           Returns the value of the last element or FALSE for empty array.
     */
    public static function end(array &$array){
        return end($array);
    }


    /////////////
    // Aliases //
    /////////////

    public static function last(array &$array){
        return self::end($array);
    }
}
