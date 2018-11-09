<?php
namespace P4F\Components\Utilities\traits\Arrays\Count;

/**
 * @url http://php.net/manual/en/function.array-count-values.php
 */
trait Values{
    /**
     * Counts all the values of an array.
     * @param  array    $array      The array of values to count.
     * @return array                Returns an associative array of values from array as keys and their count as value.
     */
    public static function countValues(array $array): ?array{
        return array_count_values($array);
    }


    /////////////
    // Aliases //
    /////////////

    public static function count_values($array){
        return self::countValues($array);
    }
}
