<?php
namespace P4F\Components\Utilities\traits\Arrays;

use P4F\Components\Utilities\traits\Arrays\UDiff\Assoc as AssocTrait;
use P4F\Components\Utilities\traits\Arrays\UDiff\UAssoc as UAssocTrait;

/**
 * @url http://be2.php.net/manual/en/function.array-udiff.php
 */
trait UDiff{
    use AssocTrait;
    use UAssocTrait;

    /**
     * Computes the difference of arrays by using a callback function for data comparison
     * @param   array  $[name]                The first array.
     * @param   array  $[name]                The second array.
     * @param   array  [...]
     * @param   callback $value_compare_func  The callback comparison function.
     *                                        The comparison function must return an integer less than, equal to,
     *                                        or greater than zero if the first argument is considered to be
     *                                        respectively less than, equal to, or greater than the second. Note that
     *                                        before PHP 7.0.0 this integer had to be in the range
     *                                        from -2147483648 to 2147483647.
     *                                        int callback ( mixed $a, mixed $b )
     * @return  array                         Returns an array containing all the values of array1 that are not
     *                                        present in any of the other arguments.
     */
    public static function udiff(){
        return call_user_func_array("array_udiff", func_get_args());
    }
}
