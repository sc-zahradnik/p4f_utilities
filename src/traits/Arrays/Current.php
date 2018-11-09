<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.current.php
 */
trait Current{
    /**
     * Return the current element in an array.
     * @param  array &$array  The array.
     * @return mixed          The current() function simply returns the value of the array element that's currently
     *                        being pointed to by the internal pointer. It does not move the pointer in any way.
     *                        If the internal pointer points beyond the end of the elements list or the array is
     *                        empty, current() returns FALSE.
     */
    public static function current(&$array){
        return current($array);
    }


    //////////////
    // Aliasses //
    //////////////

    public static function pos(&$array){
        return self::current($array);
    }

    public static function position(&$array){
        return self::current($array);
    }
}
