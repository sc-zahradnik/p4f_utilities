<?php
namespace P4F\Components\Utilities\traits\Arrays\Sort;

/**
 * @url be2.php.net/manual/en/function.ksort.php
 */
trait KSort{
    /**
     * Sort an array by key.
     * @param  array    &$array     The input array.
     * @param  int|null $sortFlags  You may modify the behavior of the sort using the optional parameter sort_flags,
     *                              for details see sort().
     * @return bool                 Returns TRUE on success or FALSE on failure.
     */
    public static function ksort(array &$array, int $sortFlags = null): bool{
        $sortFlags = $sortFlags ?? SORT_REGULAR;
        return ksort($array, $sortFlags);
    }
}
