<?php
namespace P4F\Components\Utilities\traits\Arrays\Sort;

/**
 * @url http://be2.php.net/manual/en/function.krsort.php
 */
trait KRSort{
    /**
     * Sort an array by key in reverse order.
     * @param  array    &$array     The input array.
     * @param  int|null $sortFlags  You may modify the behavior of the sort using the optional parameter sort_flags,
     *                              for details see sort().
     * @return bool                 Returns TRUE on success or FALSE on failure.
     */
    public static function krsort(array &$array, int $sortFlags = null): bool{
        $sortFlags = $sortFlags ?? SORT_REGULAR;
        return krsort($array, $sortFlags);
    }
}
