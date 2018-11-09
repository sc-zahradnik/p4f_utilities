<?php
namespace P4F\Components\Utilities\traits\Arrays\Intersect;

/**
 * @url http://be2.php.net/manual/en/function.array-intersect-uassoc.php
 */
trait UAssoc{
    /**
     * Computes the intersection of arrays with additional index check, compares indexes by a callback function.
     * @param  array  $array1                   Initial array for comparison of the arrays.
     * @param  array  $array2                   First array to compare keys against.
     * @param  array  [$array3, $array4, ...]   First array to compare keys against.
     * @return array                            Variable list of array arguments to compare values against.
     */
    public static function intersectUassoc(array $array1, array $array2): array{
        return call_user_func_array("array_intersect_uassoc", func_get_args());
    }


    //////////////
    // Alliases //
    //////////////

    public static function intersect_uassoc($array1, $array2){
        return call_user_func_array([self, "intersectUAssoc"], func_get_args());
    }
}
