<?php
namespace P4F\Components\Utilities\traits\Arrays\Sort;

/**
 * @url http://be2.php.net/manual/en/function.array-multisort.php
 */
trait Multisort{
    /**
     * Sort multiple or multi-dimensional arrays
     * @param  array    $array      An array being sorted.
     * @param  mixed    $sortOrder  The order used to sort the previous array argument.
     *                                  Either SORT_ASC to sort ascendingly or SORT_DESC to sort descendingly.
     *                                  This argument can be swapped with array1_sort_flags or omitted entirely, 
     *                                  in which case SORT_ASC is assumed.
     * @param  mixed    $sortFlags  Sort options for the previous array argument
     * @param  mixed    ...         More arrays, optionally followed by sort order and flags. 
     *                                  Only elements corresponding to equivalent elements in previous arrays 
     *                                  are compared. In other words, the sort is lexicographical. 
     * @return bool                 [description]
     */
    public static function multisort(array $array, $sortOrder, $sortFlags): bool{
        return call_user_func_array("array_multisort", func_get_args());
    }
}