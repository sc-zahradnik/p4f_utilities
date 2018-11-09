<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.next.php
 */
trait Next{
    /**
     * Advance the internal pointer of an array
     * @param  [type]   &$array     The array being affected.
     * @return mixed                Returns the array value in the next place that's pointed to by the internal
     *                              array pointer, or FALSE if there are no more elements.
     */
    public static function next(array &$array){
        return next($array);
    }
}
