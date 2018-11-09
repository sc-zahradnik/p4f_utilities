<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.array-flip.php
 */
trait Flip{
    /**
     * Exchanges all keys with their associated values in an array
     * @param  array  $array    An array of key/value pairs to be flipped.
     * @return array|null       Returns the flipped array on success and NULL on failure.
     */
    public static function flip(array $array): ?array{
        return array_flip($array);
    }
}
