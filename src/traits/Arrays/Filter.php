<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.array-filter.php
 */
trait Filter{
    /**
     * Filters elements of an array using a callback function
     * @param  array         $array     Filters elements of an array using a callback function
     * @param  callable|null $callback  The callback function to use. If no callback is supplied, 
     *                                  all entries of array equal to FALSE (see converting to boolean)
     *                                  will be removed.
     * @param  int|integer   $flag      Flag determining what arguments are sent to callback:
     *                                  ARRAY_FILTER_USE_KEY - pass key as the only argument to 
     *                                                      callback instead of the value
     *                                  ARRAY_FILTER_USE_BOTH - pass both value and key as arguments
     *                                  to callback instead of the value
     *                                  Default is 0 which will pass value as the only argument
     *                                  to callback instead. 
     * @return array                    Returns the filtered array.
     */
    public static function filter(array $array, callable $callback = null, int $flag = 0): array{
        return array_filter($array, $callback, $flag);
    }
}
