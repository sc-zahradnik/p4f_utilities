<?php
namespace P4F\Components\Utilities\traits\Arrays;

use P4F\Components\Utilities\traits\Arrays\Diff\Assoc as AssocTrait;
use P4F\Components\Utilities\traits\Arrays\Diff\Key as KeyTrait;
use P4F\Components\Utilities\traits\Arrays\Diff\UAssoc as UAssocTrait;
use P4F\Components\Utilities\traits\Arrays\Diff\UKey as UKeyTrait;

/**
 * @url http://php.net/manual/en/function.array-diff.php
 */
trait Diff{
    use AssocTrait;
    use KeyTrait;
    use UAssocTrait;
    use UKeyTrait;

    /**
     * Computes the difference of arrays
     * @param  array  $array1                   The array to compare from.
     * @param  array  $array2                   An array to compare against.
     * @param  array  [$array3, $array4, ...]   More arrays to compare against.
     * @return array                            Returns an array containing all the entries from
     *                                          array1 that are not present in any of the other arrays.
     */
    public static function diff(array $array1, array $array2):array{
        return call_user_func_array("array_diff", func_get_args());
    }
}
