<?php
namespace P4F\Components\Utilities\traits\Arrays\Sort;

trait ARSort{
    /**
     * Sort an array in reverse order and maintain index association.
     * @param  array    &$array     The input array.
     * @param  int|null $sortFlags  You may modify the behavior of the sort using the optional parameter sort_flags,
     *                              for details see sort().
     * @return bool                 Returns TRUE on success or FALSE on failure.
     */
    public static function arsort(array &$array, int $sortFlags = null): bool{
        $sortFlags = $sortFlags ?? SORT_REGULAR;
        return arsort($array, $sortFlags);
    }
}
