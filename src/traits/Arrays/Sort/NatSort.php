<?php
namespace P4F\Components\Utilities\traits\Arrays\Sort;

/**
 * @url http://be2.php.net/manual/en/function.natsort.php
 */
trait NatSort{
    /**
     * Sort an array using a "natural order" algorithm.
     * @param  array  &$array  The input array.
     * @return bool            Returns TRUE on success or FALSE on failure.
     */
    public static function natsort(array &$array): bool{
        return natsort($array);
    }
}
