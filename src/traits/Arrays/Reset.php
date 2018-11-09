<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.reset.php
 */
trait Reset{
    /**
     * Set the internal pointer of an array to its first element.
     * @param  array  &$array  The input array.
     * @return mixed           Returns the value of the first array element, or FALSE if the array is empty.
     */
    public static function reset(array &$array){
        return reset($array);
    }
}
