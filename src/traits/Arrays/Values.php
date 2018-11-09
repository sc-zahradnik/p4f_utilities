<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.array-values.php
 */
trait Values{
    /**
     * Return all the values of an array.
     * @param  array  $array  The array.
     * @return array          Returns an indexed array of values.
     */
    public static function values(array $array): array{
        return array_values($array);
    }
}
