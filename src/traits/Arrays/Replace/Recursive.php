<?php
namespace P4F\Components\Utilities\traits\Arrays\Replace;

/**
 * @url http://be2.php.net/manual/en/function.array-replace-recursive.php
 */
trait Recursive{
    /**
     * Replaces elements from passed arrays into the first array recursively.
     * @param  array        $array1             The array in which elements are replaced.
     * @param  array        [$array2, ...]      The array in which elements are replaced.
     * @return array|null                       Returns an array, or NULL if an error occurs.
     */
    public static function replaceRecursive(array $array1): ?array{
        return call_user_func_array("array_replace_recursive", func_get_args());
    }


    /////////////
    // Aliases //
    /////////////

    public static function replace_recursive($array1){
        return self::replaceRecursive(fnc_get_args());
        //return call_user_func_array([self, "replaceRecursive"], fnc_get_args());
    }
}
