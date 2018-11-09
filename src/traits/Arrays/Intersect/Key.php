<?php
namespace P4F\Components\Utilities\traits\Arrays\Intersect;

/**
 * @url http://be2.php.net/manual/en/function.array-intersect-key.php
 */
trait Key{

    /**
     * Computes the intersection of arrays using keys for comparison.
     * @param  array    $array1                     The array with master keys to check.
     * @param  array    $array2                     An array to compare keys against.
     * @param  array    [$array3, $array4, ...]     A variable list of arrays to compare.
     * @return array                                Returns an associative array containing all
     *                                              the entries of array1 which have keys that are
     *                                              present in all arguments.
     */
    public static function intersectKey(array $array1, array $array2): array{
        return array_intersect_key(func_get_args());
    }


    //////////////
    // Alliases //
    //////////////

    public static function intersect_key($array1, $array2){
        return call_user_func_array([self, "intersectKey"], func_get_args());
    }
}
