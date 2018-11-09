<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.array-pad.php
 */
trait Pad{

    /**
     * Pad array to the specified length with a value
     * @param  array    $array  Initial array of values to pad.
     * @param  int      $size   New size of the array.
     * @param  mixed    $value  Value to pad if array is less than size.
     * @return array            Returns a copy of the array padded to size specified by size with value value. If size
     *                          is positive then the array is padded on the right, if it's negative then on the left.
     *                          If the absolute value of size is less than or equal to the length of the array then
     *                          no padding takes place.
     */
    public static function pad(array $array, int $size, $value): array{
        return array_pad($array, $size, $value);
    }
}
