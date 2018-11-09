<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.array-splice.php
 */
trait Splice{
    /**
     * Remove a portion of the array and replace it with something else.
     * @param  array    &$array       The input array.
     * @param  int      $offset       If offset is positive then the start of removed portion is at that offset
     *                                from the beginning of the input array. If offset is negative then it starts
     *                                that far from the end of the input array.
     * @param  int|null $length       If length is omitted, removes everything from offset to the end of the array.
     *                                If length is specified and is positive, then that many elements will be removed.
     *                                If length is specified and is negative then the end of the removed portion will
     *                                be that many elements from the end of the array. If length is specified and is
     *                                zero, no elements will be removed. Tip: to remove everything from offset to the
     *                                end of the array when replacement is also specified, use count($input) for length.
     * @param  array    $replacement  If replacement array is specified, then the removed elements are replaced with
     *                                elements from this array.
     *                                If offset and length are such that nothing is removed, then the elements from the
     *                                replacement array are inserted in the place specified by the offset. Note that
     *                                keys in replacement array are not preserved.
     *                                If replacement is just one element it is not necessary to put array() around it,
     *                                unless the element is an array itself, an object or NULL.
     * @return array                  Returns an array consisting of the extracted elements.
     */
    public static function splice(array &$array, int $offset, int $length = null, $replacement = []): array{
        $length = $length ?? count($array);
        return array_splice($array, $offset, $length, $replacement);
    }
}
