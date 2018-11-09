<?php
namespace P4F\Components\Utilities\traits\Arrays\Walk;

/**
 * @url http://be2.php.net/manual/en/function.array-walk-recursive.php
 */
trait Recursive{
    /**
     * Apply a user function recursively to every member of an array.
     * @param  array     $array     The input array.
     * @param  callback  $callback  Typically, callback takes on two parameters. The array parameter's value being
     *                              the first, and the key/index second.
     * @param  mixed     $userData  If the optional userdata parameter is supplied, it will be passed as the third
     *                              parameter to the callback.
     * @return bool                 Returns TRUE on success or FALSE on failure.
     */
    public static function walkRecursive(array $array, $callback, $userData = null): bool{
        return array_walk_recursive($array, $callback, $userData);
    }

    public static function walk_recursive(array $array, $callback, $userData = null){
        return call_user_func_array([self, "walkRecursive"], func_get_args());
    }
}
