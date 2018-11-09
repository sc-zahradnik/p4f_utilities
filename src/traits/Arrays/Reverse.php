<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.array-reverse.php
 */
trait Reverse{

    /**
     * Return an array with elements in reverse order.
     * @param  array        $array         The input array.
     * @param  bool|boolean $preserveKeys  If set to TRUE numeric keys are preserved. Non-numeric keys are not
     *                                     affected by this setting and will always be preserved.
     * @return array                       Returns the reversed array.
     */
    public static function reverse(array $array, bool $preserveKeys = false): array{
        return array_reverse($array, $preserveKeys);
    }
}
