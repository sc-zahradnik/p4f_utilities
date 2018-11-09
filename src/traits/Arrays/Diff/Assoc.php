<?php
namespace P4F\Components\Utilities\traits\Arrays\Diff;

/**
 * @url http://php.net/manual/en/function.array-diff-assoc.php
 */
trait Assoc{
    /**
     * Computes the difference of arrays with additional index check
     * @param  array  $array1                   The array to compare from.
     * @param  array  $array2                   An array to compare against.
     * @param  array  [$array3, $array4, ...]   More arrays to compare against.
     * @return array                            Returns an array containing all the values
     *                                          from array1 that are not present in any of the other arrays.
     */
    public static function diffAssoc(array $array1, array $array2): array{
        return call_user_func_array("array_diff_assoc", func_get_args());
    }


    /////////////
    // Aliases //
    /////////////

    public static function diff_assoc($array1, $array2){
        return call_user_func_array([self, "diffAssoc"], func_get_args());
    }
}
