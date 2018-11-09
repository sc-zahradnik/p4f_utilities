<?php
namespace P4F\Components\Utilities\traits\Arrays\Intersect;

/**
 * @url http://be2.php.net/manual/en/function.array-intersect-assoc.php
 */
trait Assoc{
    /**
     * Computes the intersection of arrays with additional index check.
     * @param  array    $array1                     The array with master values to check.
     * @param  array    $array2                     An array to compare values against.
     * @param  array    [$array3, $array4, ...]     More arrays to compare against.
     * @return array                                Returns an associative array containing all
     *                                              the values in array1 that are present in all
     *                                              of the arguments.
     */
    public static function intersectAssoc(array $array1, array $array2): array{
        return call_user_func_array("array_intersect_assoc", func_get_args());
    }


    //////////////
    // Alliases //
    //////////////

    public static function intersect_assoc($array1, $array2){
        return call_user_func_array([self, "intersectAssoc"], func_get_args());
    }
}
