<?php
namespace P4F\Components\Utilities\traits\Arrays\Diff;

/**
 * @url http://php.net/manual/en/function.array-diff-key.php
 */
trait Key{
    /**
     * Computes the difference of arrays using keys for comparison
     * @param  array  $array1                   The array to compare from.
     * @param  array  $array2                   An array to compare against.
     * @param  array  [$array3, $array4, ...]   More arrays to compare against.
     * @return array                            Returns an array containing all the entries
     *                                          from array1 whose keys are absent from all of the other arrays.
     */
    public static function diffKey(array $array1, array $array2): array{
        return call_user_func_array("array_diff_key", func_get_args());
    }


    //////////////
    // Alliases //
    //////////////

    public static function diff_Key($array1, $array2){
        return call_user_func_array([self, "diffKey"], func_get_args());
    }
}
