<?php
namespace P4F\Components\Utilities\traits\Arrays\Merge;

/**
 * @url http://be2.php.net/manual/en/function.array-merge-recursive.php
 */
trait Recursive{
    /**
     * Merge one or more arrays recursively
     * @param  array    $array  Initial array to merge.
     * @param  array    [...]   Variable list of arrays to recursively merge.
     * @return array            An array of values resulted from merging the arguments together.
     */
    public static function mergeRecursive(array $array): array{
        return call_user_func_array("array_merge_recursive", func_get_args());
    }


    //////////////
    // Alliases //
    //////////////

    public static function merge_recursive($array){
        return call_user_func_array([self, "mergeRecursive"], func_get_args());
    }
}
