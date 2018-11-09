<?php
namespace P4F\Components\Utilities\traits\Arrays;

use P4F\Components\Utilities\traits\Arrays\UIntersect\Assoc as AssocTrait;
use P4F\Components\Utilities\traits\Arrays\UIntersect\UAssoc as UAssocTrait;

/**
 * @url http://be2.php.net/manual/en/function.array-uintersect.php
 */
trait UIntersect{
    use AssocTrait;
    use UAssocTrait;

    /**
     * Computes the intersection of arrays, compares data by a callback function
     * @param  array $array1            The first array.
     * @param  array $array2            The second array.
     * @param  array $valueCompareFunc  The comparison function must return an integer less than, equal to, or
     *                                  greater than zero if the first argument is considered to be respectively
     *                                  less than, equal to, or greater than the second. Note that before
     *                                  PHP 7.0.0 this integer had to be in the range from -2147483648 to 2147483647.
     *                                  int callback ( mixed $a, mixed $b )
     * @return arra                     Returns an array containing all the values of array1 that are present in
     *                                  all the arguments.
     */
    public static function uintersect(){
        return call_user_func_array("array_uintersect", func_get_args());
    }
}
