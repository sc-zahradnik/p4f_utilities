<?php
namespace P4F\Components\Utilities\traits\Arrays\UIntersect;

/**
 * @url http://be2.php.net/manual/en/function.array-uintersect-uassoc.php
 */
trait UAssoc{
    /**
     * Computes the intersection of arrays with additional index check, compares data by a callback function.
     * @param array     $array1             The first array.
     * @param array     $array2             The second array.
     * @param callback  $valueCompareFunc   The comparison function must return an integer less than, equal to, or
     *                                      greater than zero if the first argument is considered to be respectively
     *                                      less than, equal to, or greater than the second. Note that before
     *                                      PHP 7.0.0 this integer had to be in the range
     *                                      from -2147483648 to 2147483647.
     *                                      int callback ( mixed $a, mixed $b )
     * @param  callback $keyCompareFunc     Key comparison callback function.
     * @return array                        Returns an array containing all the values of array1 that are present
     *                                      in all the arguments.
     */
    public static function uintersectUassoc(){
        return call_user_func_array("array_uintersect_uassoc", func_get_args());
    }


    //////////////
    // ALIASSES //
    //////////////

    public static function uintersect_uassoc(){
        return call_user_func_array([self, "uintersectUassoc"], func_get_args());
    }
}
