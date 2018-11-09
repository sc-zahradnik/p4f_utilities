<?php
namespace P4F\Components\Utilities\traits\Arrays\Sort;

/**
 * @url http://be2.php.net/manual/en/function.natcasesort.php
 */
trait NatcaseSort{
    /**
     * Sort an array using a case insensitive "natural order" algorithm.
     * @param  array  &$array  The input array.
     * @return                 Returns TRUE on success or FALSE on failure.
     */
    public static function natcasesort(array &$array): bool{
        return natcasesort($array);
    }
}
