<?php
namespace P4F\Components\Utilities\traits\Arrays;

use P4F\Components\Utilities\traits\Arrays\Fill\Keys as KeysTrait;

/**
 * @url http://be2.php.net/manual/en/function.array-fill.php
 */
trait Fill{
    use KeysTrait;
    
    /**
     *
     * @param  int      $startIndex     The first index of the returned array.
                                        If start_index is negative, the first index of the returned
                                        array will be start_index and the following indices will
                                        start from zero (see example).
     * @param  int      $num            Number of elements to insert. Must be greater than or equal to zero.
     * @param  mixed    $value          Value to use for filling
     * @return array                    Returns the filled array
     */
    public static function fill(int $startIndex, int $num, $value): array{
        return array_fill($startIndex, $num, $value);
    }
}
