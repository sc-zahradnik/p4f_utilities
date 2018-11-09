<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.shuffle.php
 */
trait Shuffle{
    /**
     * Shuffle an array.
     * @param  array  &$array  The array.
     * @return bool            Returns TRUE on success or FALSE on failure.
     */
    public static function shuffle(array &$array): bool{
        return shuffle($array);
    }
}
