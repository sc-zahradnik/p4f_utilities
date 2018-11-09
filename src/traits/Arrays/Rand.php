<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.array-rand.php
 */
trait Rand{
    /**
     * Pick one or more random entries out of an array
     * @param  array    $array  The input array.
     * @param  int      $num    Specifies how many entries should be picked. 
     * @return mixed            When picking only one entry, array_rand() returns the key for a random entry. 
     *                          Otherwise, an array of keys for the random entries is returned. This is done so that 
     *                          random keys can be picked from the array as well as random values. Trying to pick 
     *                          more elements than there are in the array will result in an E_WARNING level error, 
     *                          and NULL will be returned. 
     */
    public static function rand(array $array, int $num = 1){
        return array_rand($array, $num);
    }
}
