<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.array-unique.php
 */
trait Unique{
    /**
     * Removes duplicate values from an array
     * @param  array    $array      The input array.
     * @param  int|null $sortFlags  The optional second parameter sort_flags may be used to modify the sorting
     *                              behavior using these values:
     *                              Sorting type flags:
     *                                SORT_REGULAR - compare items normally (don't change types)
     *                                SORT_NUMERIC - compare items numerically
     *                                SORT_STRING - compare items as strings
     *                                SORT_LOCALE_STRING - compare items as strings, based on the current locale.
     * @return array                Returns the filtered array.
     */
    public static function unique(array $array, int $sortFlags = null): array{
        $sortFlags = $sortFlags ?? SORT_STRING;
        return array_unique($array, $sortFlags);
    }
}
