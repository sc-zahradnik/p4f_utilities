<?php
namespace P4F\Components\Utilities\traits\Arrays\Intersect;

/**
 * @url http://php.net/manual/en/function.array-intersect-ukey.php
 */
trait Ukey{
    /**
     * Computes the intersection of arrays using a callback function on the keys for comparison.
     * @param  array    $array1                     Initial array for comparison of the arrays.
     * @param  array    $array2                     First array to compare keys against.
     * @param  array    [$array3, $array4, ...]     Variable list of array arguments to compare keys against.
     * @param  callable $fncKeyCompare              The comparison function must return an integer less than,
     *                                              equal to, or greater than zero if the first argument is
     *                                              considered to be respectively less than, equal to,
     *                                              or greater than the second. Note that before PHP 7.0.0
     *                                              this integer had to be in the range
     *                                              from -2147483648 to 2147483647.
     * @return array                                Returns the values of array1 whose values exist in
     *                                              all of the arguments.
     */
    public static function intersectUKey(array $array1, array $array2): array{
        return call_user_func_array("array_intersect_ukey", func_get_args());
    }


    //////////////
    // Alliases //
    //////////////

    public static function intersect_ukey($array1, $array2){
        return call_user_func_array([self, "intersectUKey"], func_get_args());
    }
}
