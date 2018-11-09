<?php
namespace P4F\Components\Utilities\traits\Arrays;

use P4F\Components\Utilities\traits\Arrays\Sort\Multisort as MultisortTrait;
use P4F\Components\Utilities\traits\Arrays\Sort\ARSort as ARSortTrait;
use P4F\Components\Utilities\traits\Arrays\Sort\ASort as ASortTrait;
use P4F\Components\Utilities\traits\Arrays\Sort\KRSort as KRSortTrait;
use P4F\Components\Utilities\traits\Arrays\Sort\KSort as KSortTrait;
use P4F\Components\Utilities\traits\Arrays\Sort\NatcaseSort as NatcaseSortTrait;
use P4F\Components\Utilities\traits\Arrays\Sort\NatSort as NatSortTrait;
use P4F\Components\Utilities\traits\Arrays\Sort\RSort as RSortTrait;

//todo: (0) asi přenést všchny sort funkce do této
/**
 * @url http://be2.php.net/manual/en/function.sort.php
 */
trait Sort{
    use MultisortTrait;
    use ARSortTrait;
    use ASortTrait;
    use KRSortTrait;
    use KSortTrait;
    use NatcaseSortTrait;
    use NatSortTrait;
    use RSortTrait;

    /**
     * Sort an array.
     * @param  array    &$array     The input array.
     * @param  int|null $sortFlags  The optional second parameter sort_flags may be used to modify the sorting
     *                              behavior using these values:
     *                                  Sorting type flags:
     *                                      SORT_REGULAR - compare items normally (don't change types)
     *                                      SORT_NUMERIC - compare items numerically
     *                                      SORT_STRING - compare items as strings
     *                                      SORT_LOCALE_STRING - compare items as strings, based on the current
     *                                                           locale. It uses the locale, which can be changed
     *                                                           using setlocale()
     *                                      SORT_NATURAL - compare items as strings using "natural ordering"
     *                                                     like natsort()
     *                                      SORT_FLAG_CASE - can be combined (bitwise OR) with SORT_STRING or
     *                                                       SORT_NATURAL to sort strings case-insensitively
     * @return bool                 Returns TRUE on success or FALSE on failure.
     */
    public static function sort(array &$array, int $sortFlags = null): bool{
        $sortFlags = $sortFlags ?? SORT_REGULAR;
        return sort($array, $sortFlags);
    }

    /**
     * Sort an array by values using a user-defined comparison function.
     * @param  arraa    &$array            The input array.
     * @param  callable $valueCompareFunc  The comparison function must return an integer less than, equal to, or
     *                                     greater than zero if the first argument is considered to be respectively
     *                                     less than, equal to, or greater than the second. Note that before
     *                                     PHP 7.0.0 this integer had to be in the range
     *                                     from -2147483648 to 2147483647.
     *                                     int callback ( mixed $a, mixed $b )
     * @return bool                        Returns TRUE on success or FALSE on failure.
     */
    public static function usort(arraa &$array, callable $valueCompareFunc): bool{
        return usort($array, $valueCompareFunc);
    }
}
