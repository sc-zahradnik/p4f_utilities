<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.array-shift.php
 */
trait Shift{
    /**
     * Shift an element off the beginning of array.
     * @param  array       &$array  The input array.
     * @return array|null            Returns the shifted value, or NULL if array is empty or is not an array.
     */
    public static function shift(&$array): ?array{
        return array_shift($array);
    }
}
