<?php
namespace P4F\Components\Utilities\traits\Arrays\Diff;

/**
 * @url http://php.net/manual/en/function.array-diff-ukey.php
 */
trait UKey{
    /**
     * Computes the difference of arrays with additional index check which is performed by a user supplied callback function.
     * @param  array  $array1                   The array to compare from.
     * @param  array  $array2                   An array to compare against.
     * @param  array  [$array3, $array4, ...]   More arrays to compare against.
     * @param  array  $fce                      The comparison function must return an integer less than,
     *                                          equal to, or greater than zero if the first argument is
     *                                          considered to be respectively less than, equal to, or
     *                                          greater than the second. Note that before PHP 7.0.0 this
     *                                          integer had to be in the range from -2147483648 to 2147483647.
     * @return array                            Returns an array containing all the entries from array1 that
     *                                          are not present in any of the other arrays.
     */
    public static function diffUkey(array $array1, array $array2):array{
        return call_user_func_array("array_diff_ukey", func_get_args());
    }


    /////////////
    // Aliases //
    /////////////

    public static function diff_Ukey($array1, $array2){
        return call_user_func_array([self, "diffUkey"], func_get_args());
    }
}
