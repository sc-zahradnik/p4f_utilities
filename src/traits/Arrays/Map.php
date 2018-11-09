<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.array-map.php
 */
trait Map{
    /**
     * Applies the callback to the elements of the given arrays
     * @param  callable     $callback   Callback function to run for each element in each array.
     * @param  array        $array      An array to run through the callback function.
     * @param  array        ...         Variable list of array arguments to run through the callback function.
     * @return array                    Returns an array containing all the elements of array1 after applying the
     *                                  callback function to each one.
     */
    public static function map(callable $callback, array $array): array{
        return call_user_func_array("array_map", func_get_args());
    }
}
