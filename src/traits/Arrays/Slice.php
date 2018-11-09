<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.array-slice.php
 */
trait Slice{
    /**
     * Extract a slice of the array.
     * @param  array        $array         The input array.
     * @param  int          $offset        If offset is non-negative, the sequence will start at that offset in the
     *                                     array. If offset is negative, the sequence will start that far from the
     *                                     end of the array. Note that the offset denotes the position in the array,
     *                                     not the key.
     * @param  int|null     $length        If length is given and is positive, then the sequence will have up to that
     *                                     many elements in it. If the array is shorter than the length, then only
     *                                     the available array elements will be present. If length is given and is
     *                                     negative then the sequence will stop that many elements from the end of
     *                                     the array. If it is omitted, then the sequence will have everything from
     *                                     offset up until the end of the array.
     * @param  bool|boolean $preserveKeys  Note that array_slice() will reorder and reset the integer array indices
     *                                     by default. You can change this behaviour by setting preserve_keys to TRUE.
     *                                     String keys are always preserved, regardless of this parameter.
     * @return [type]                      Returns the slice. If the offset is larger than the size of the array
     *                                     then returns an empty array.
     */
    public static function slice(array $array, int $offset, int $length = null, bool $preserveKeys = false): array{
        return array_slice($array, $offset, $length, $preserveKeys);
    }
}
