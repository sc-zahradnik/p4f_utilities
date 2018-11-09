<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.array-sum.php
 */
trait Sum{
    /**
     * Calculate the sum of values in an array.
     * @param  array  $array  The input array.
     * @return number         Returns the sum of values as an integer or float; 0 if the array is empty.
     */
    public static function sum(array $array): number{
        return array_sum($array);
    }
}
