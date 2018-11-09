<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.prev.php
 */
trait Prev{
    /**
     * Rewind the internal array pointer.
     * @param  array  &$array  The input array.
     * @return mixed           Returns the array value in the previous place that's pointed to by the internal
     *                         array pointer, or FALSE if there are no more elements.
     */
    public static function prev(array &$array){
        return prev($array);
    }


    //////////////
    // aliasses //
    //////////////
    
    public static function previous(array &$array){
        return self::prev($array);
    }
}
