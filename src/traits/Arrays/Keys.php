<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.array-keys.php
 */
trait Keys{
    /**
     * Return all the keys or a subset of the keys of an array.
     * @param  array        $array       An array containing keys to return.
     * @param  mixed        $searchValue If specified, then only keys containing these values are returned.
     * @param  bool|boolean $strict      Determines if strict comparison (===) should be used during the search.
     * @return array                     Returns an array of all the keys in array.
     */
    public static function keys(array $array, $searchValue = null, bool $strict = false): array{
        if (is_null($searchValue)) {
            return array_keys($array);
        }
        return array_keys($array, $searchValue, $strict);
    }
}
