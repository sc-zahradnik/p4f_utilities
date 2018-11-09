<?php
namespace P4F\Components\Utilities\traits\Arrays;

use P4F\Components\Utilities\traits\Arrays\Walk\Recursive as RecursiveTrait;

/**
 * @url http://be2.php.net/manual/en/function.array-walk.php
 */
trait Walk{
    use RecursiveTrait;
    
    /**
     * Apply a user supplied function to every member of an array.
     * @param  array    $array      The input array.
     * @param  callback $callback   Typically, callback takes on two parameters. The array parameter's value being
     *                              the first, and the key/index second.
     * @param  mixed    $userData   If the optional userdata parameter is supplied, it will be passed as the
     *                              third parameter to the callback.
     * @return bool                 Returns TRUE.
     */
    public static function walk(array $array, $callback, $userData = null): bool{
        return array_walk($array, $callback, $userData);
    }
}
