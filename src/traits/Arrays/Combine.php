<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://php.net/manual/en/function.array-combine.php
 */
trait Combine{
    /**
     * Creates an array by using one array for keys and another for its values
     * @param  array        $keys       Array of keys to be used. Illegal values for key
     *                                  will be converted to string.
     * @param  array        $values     Array of values to be used
     * @return array|false              Returns the combined array, FALSE if the number of
     *                                  elements for each array isn't equal.
     */
    public static function combine(array $keys, array $values): ?array{
        return array_combine($keys, $values);
    }
}
