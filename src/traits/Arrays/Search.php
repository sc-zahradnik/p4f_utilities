<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.array-search.php
 */
trait Search{
    /**
     * Searches the array for a given value and returns the first corresponding key if successful.
     * @param  array        $array   The searched value.
     * @param  mixed        $needle  The array.
     * @param  bool|boolean $strict  If the third parameter strict is set to TRUE then the array_search() function
     *                               will search for identical elements in the haystack. This means it will also
     *                               perform a strict type comparison of the needle in the haystack, and objects 
     *                               must be the same instance.
     * @return mixed                 Returns the key for needle if it is found in the array, FALSE otherwise.
     */
    public static function search(array $array, $needle, bool $strict = false){
        return array_search($needle, $array, $strict);
    }
}
