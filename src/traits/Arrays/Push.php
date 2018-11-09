<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.array-push.php
 */
trait Push{
    /**
     * Push one or more elements onto the end of array.
     * @param  array    &$array     The input array.
     * @param  mixed    $value      The first value to push onto the end of the array.
     * @param  mixed    [...]         The next values to push onto the end of the array.
     * @return int                  Returns the new number of elements in the array.
     */
    public static function push(array &$array, $value): int{
        return call_user_func_array("array_push", func_get_args());
    }
}
