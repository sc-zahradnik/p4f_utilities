<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.array-reduce.php
 */
trait Reduce{
    /**
     * Iteratively reduce the array to a single value using a callback function
     * @param  array        $array      The input array.
     * @param  callable     $callback   mixed callback ( mixed $carry , mixed $item )
     *                                      carry
     *                                          Holds the return value of the previous iteration;
     *                                          in the case of the first iteration it instead holds the value of
     *                                          initial.
     *                                      item
     *                                          Holds the value of the current iteration.
     * @param  mixed        $initial    If the optional initial is available,
     *                                      it will be used at the beginning of the process,
     *                                      or as a final result in case the array is empty.
     * @return mixed                    Returns the resulting value. If the array is empty and
     *                                      initial is not passed, array_reduce() returns NULL.
     */
    public static function reduce(array $array, callable $callback, $initial = null){
        return array_reduce($array, $callback, $initial);
    }
}
