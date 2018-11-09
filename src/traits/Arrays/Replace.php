<?php
namespace P4F\Components\Utilities\traits\Arrays;

use P4F\Components\Utilities\traits\Arrays\Replace\Recursive as RecursiveTrait;

/**
 * @url http://be2.php.net/manual/en/function.array-replace.php
 */
trait Replace{
    use RecursiveTrait;

    /**
     * Replaces elements from passed arrays into the first array.
     * @param  array      $array1  The array in which elements are replaced.
     * @param  array      [...]    Arrays from which elements will be extracted. Values from later arrays
     *                             overwrite the previous values.
     * @return array|null          Returns an array, or NULL if an error occurs.
     */
    public static function replace(array $array1, array $array2): ?array{
        return call_user_func_array("array_replace", func_get_args());
    }
}
