<?php
namespace P4F\Components\Utilities\traits\Arrays\Fill;

/**
 * @url http://be2.php.net/manual/en/function.array-fill-keys.php
 */
trait Keys{
    /**
     * Fill an array with values, specifying keys
     * @param  array    $keys   Array of values that will be used as keys.
     *                          Illegal values for key will be converted to string.
     * @param  mixed    $value  Value to use for filling
     * @return array            Returns the filled array
     */
    public static function fillKeys(array $keys, $value): array{
        return array_fill_keys($keys, $value);
    }


    /////////////
    // Aliases //
    /////////////

    public static function fill_Keys($keys, $value){
        return self::fillKeys($keys, $value);
    }
}
