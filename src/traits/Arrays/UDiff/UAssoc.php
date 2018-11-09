<?php
namespace P4F\Components\Utilities\traits\Arrays\UDiff;

/**
 * @url http://be2.php.net/manual/en/function.array-udiff-uassoc.php
 */
trait UAssoc{
    /**
     * Computes the difference of arrays with additional index check, compares data by a callback function.
     * @param  array     $array1              The first array.
     * @param  array     $array2              The second array.
     * @param  array     [...]
     * @param  callback  $value_compare_func  The comparison function must return an integer less than, equal to,
     *                                        or greater than
     *                                        zero if the first argument is considered to be respectively less than,
     *                                        equal to, or greater than the second. Note that before PHP 7.0.0 this
     *                                        integer had to be in the range from -2147483648 to 2147483647.
     *                                        int callback ( mixed $a, mixed $b )
     * @param  callback $key_compare_func     The comparison of keys (indices) is done also by the callback function
     *                                        key_compare_func. This behaviour is unlike what array_udiff_assoc() does,
     *                                        since the latter compares the indices by using an internal function.
     * @return                                Returns an array containing all the values from array1 that are not
     *                                        present in any of the other arguments.
     */
    public static function udiffUassoc(){
        return call_user_func_array("array_udiff_uassoc", func_get_args());
    }


    /////////////
    // Aliases //
    /////////////

    public static function udiff_uassoc(){
        return call_user_func_array([self, "udiffUassoc"], func_get_args());
    }
}
