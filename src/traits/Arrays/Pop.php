<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.array-pop.php
 */
trait Pop{
    /**
     * Pop the element off the end of array
     * @param  array    &$array     The array to get the value from.
     * @return mixed                Returns the last value of array. If array is empty (or is not an array), NULL will
     *                              be returned.
     */
    public static function pop(array &$array): ?array{
        return array_pop($array);
    }
}
