<?php
namespace P4F\Components\Utilities\traits\Arrays\Sort;

/**
 * @url http://be2.php.net/manual/en/function.rsort.php
 */
trait RSort{
    /**
     * Sort an array in reverse order.
     * @param  array    &$array     The input array.
     * @param  int|null $sortFlags  You may modify the behavior of the sort using the optional parameter sort_flags,
     *                              for details see sort().
     * @return boo                  Returns TRUE on success or FALSE on failure.
     */
    public static function rsort(array &$array, int $sortFlags = null): bool{
        $sortFlags = $sortFlags ?? SORT_REGULAR;
        return rsort($array, $sortFlags);
    }
}
