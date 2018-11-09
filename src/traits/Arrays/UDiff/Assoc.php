<?php
namespace P4F\Components\Utilities\traits\Arrays\UDiff;

/**
 * @url http://be2.php.net/manual/en/function.array-udiff-assoc.php
 */
trait Assoc{
    /**
     * Computes the difference of arrays with additional index check, compares data by a callback function.
     * @param  array     $array1  The first array.
     * @param  array     $array2  The second array.
     * @param  array     [...]
     * @param callback           The comparison function must return an integer less than, equal to, or greater than
     *                            zero if the first argument is considered to be respectively less than, equal to, or
     *                            greater than the second. Note that before PHP 7.0.0 this integer had to be in
     *                            the range from -2147483648 to 2147483647.
     *                            int callback ( mixed $a, mixed $b )
     * @return                    array_udiff_assoc() returns an array containing all the values from array1 that are
     *                            not present in any of the other arguments. Note that the keys are used in the
     *                            comparison unlike array_diff() and array_udiff(). The comparison of arrays' data
     *                            is performed by using an user-supplied callback. In this aspect the behaviour is
     *                            opposite to the behaviour of array_diff_assoc() which uses internal function
     *                            for comparison.
     */
    public static function udiffAssoc(){
        return call_user_func_array("array_udiff_assoc", func_get_args());
    }


    /////////////
    // Aliases //
    /////////////

    public static function udiff_assoc(){
        return call_user_func_array([self, "udiffAssoc"], func_get_args());
    }
}
