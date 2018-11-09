<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.in-array.php
 */
trait InArray{
    /**
     * Checks if a value exists in an array.
     * @param  array        $array   The array.
     * @param  mixed        $needle  The searched value.
     * @param  bool|boolean $strict  If the third parameter strict is set to TRUE then the in_array() function will
     *                               also check the types of the needle in the haystack.
     * @return bool                  Returns TRUE if needle is found in the array, FALSE otherwise.
     */
    public static function inArray(array $array, $needle, bool $strict = false): bool{
        return in_array($needle, $array, $strict);
    }


    //////////////
    // Aliasses //
    //////////////

    public static function in(array $array, $needle, bool $strict = false){
        return self::inArray($array, $needle, $strict);
    }

    public static function in_array(array $array, $needle, bool $strict = false){
        return self::inArray($array, $needle, $strict);
    }
}
