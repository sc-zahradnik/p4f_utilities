<?php
namespace P4F\Components\Utilities\traits\Arrays;

use P4F\Components\Utilities\traits\Arrays\Intersect\Assoc as AssocTrait;
use P4F\Components\Utilities\traits\Arrays\Intersect\Key as KeyTrait;
use P4F\Components\Utilities\traits\Arrays\Intersect\UAssoc as UAssocTrait;
use P4F\Components\Utilities\traits\Arrays\Intersect\UKey as UKeyTrait;

/**
 * @url http://be2.php.net/manual/en/function.array-intersect.php
 */
trait Intersect{
    use AssocTrait;
    use KeyTrait;
    use UAssocTrait;
    use UKeyTrait;

    /**
     * Computes the intersection of arrays
     * @param array     $array1                     The array with master values to check.
     * @param array     $array2                     An array to compare values against.
     * @param array     [$array3, $array4, ...]     A variable list of arrays to compare.
     * @return array                                Returns an array containing all of the values in
     *                                              array1 whose values exist in all of the parameters.
     */
    public static function intersect(): array{
        return call_user_func_array("array_intersect", func_get_args());
    }
}
