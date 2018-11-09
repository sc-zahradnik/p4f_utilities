<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.array-unshift.php
 */
trait Unshift{
    /**
     * Prepend one or more elements to the beginning of an array.
     * @param  array  &$array   The input array.
     * @param  mixed  [$values|...]   The values to prepend.
     * @return int              Returns the new number of elements in the array.
     */
    public static function unshift(array &$array, $values = null): int{
        return call_user_func_array("array_unshift", func_get_args());
    }
}
