<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://php.net/manual/en/function.array-column.php
 */
trait Column{
    /**
     * Return the values from a single column in the input array
     * @param  array    $array      A multi-dimensional array or an array of objects
     *                              from which to pull a column of values from. If
     *                              an array of objects is provided, then public properties
     *                              can be directly pulled. In order for protected or
     *                              private properties to be pulled, the class must
     *                              implement both the __get() and __isset() magic methods
     * @param  mixed    $columnKey  The column of values to return. This value may be
     *                              an integer key of the column you wish to retrieve, or
     *                              it may be a string key name for an associative array or
     *                              property name. It may also be NULL to return complete
     *                              arrays or objects (this is useful together with index_key
     *                              to reindex the array).
     * @param  mixed    $indexKey   The column to use as the index/keys for the returned array.
     *                              This value may be the integer key of the column, or it may
     *                              be the string key name.
     * @return array                Returns an array of values representing a single column
     *                              from the input array.
     */
    public static function column(array $array, $columnKey, $indexKey = null): ?array{
        return array_column($array, $columnKey, $indexKey);
    }
}
