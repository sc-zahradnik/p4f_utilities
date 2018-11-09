<?php
namespace P4F\Components\Utilities\traits\Arrays;

use P4F\Components\Utilities\traits\Arrays\Merge\Recursive as RecursiveTrait;

/**
 * @url http://be2.php.net/manual/en/function.array-merge.php
 */
trait Merge{
    use RecursiveTrait;

    /**
     * Merge one or more arrays
     * @param  array    $array  Initial array to merge.
     * @param  array    [...]     Variable list of arrays to merge.
     * @return array            Returns the resulting array.
     */
    public static function merge(array $array): array{
        return call_user_func_array("array_merge", func_get_args());
    }
}
