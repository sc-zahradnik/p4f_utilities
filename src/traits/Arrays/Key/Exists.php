<?php
namespace P4F\Components\Utilities\traits\Arrays\Key;

/**
 * @url http://be2.php.net/manual/en/function.array-key-exists.php
 */
trait Exists{
    /**
     * Checks if the given key or index exists in the array
     * @param  array    $array      An array with keys to check.
     * @param  mixed    $key        Value to check.
     * @return bool                 Returns TRUE on success or FALSE on failure.
     */
    public static function keyExists(array $array, $key): bool{
        if (preg_match("/.*\/.*/", $key)) {
            $keys = explode("/", $key);

            return self::subKeysExists($array, $keys);
        } else {
            return array_key_exists($key, $array);
        }
    }

    private static function subKeysExists($array, &$keys){
        foreach ($keys as $index => $key) {
            if (isset($array[$key])) {
                unset($keys[$index]);
                if (count($keys) > 0) {
                    return self::subKeysExists($array[$key], $keys);
                } else {
                    return true;
                }
            } else {
                return false;
            }
        }
    }


    /////////////
    // Aliases //
    /////////////

    public static function key_exists($array, $key){
        return self::keyExists($array, $key);
    }
}
