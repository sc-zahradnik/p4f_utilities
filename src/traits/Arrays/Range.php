<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.range.php
 */
trait Range{
    /**
     * Create an array containing a range of elements.
     * @param  mixed   $start   First value of the sequence.
     * @param  mixed   $end     The sequence is ended upon reaching the end value.
     * @param  integer $step    If a step value is given, it will be used as the increment between elements in the
     *                          sequence. step should be given as a positive number. If not specified, step will
     *                          default to 1.
     * @return array            Returns an array of elements from start to end, inclusive.
     */
    public static function range($start, $end, $step = 1): array{
        return range($start, $end, $step);
    }
}
