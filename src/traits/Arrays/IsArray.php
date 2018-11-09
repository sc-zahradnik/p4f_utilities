<?php
namespace P4F\Components\Utilities\traits\Arrays;

use P4F\Components\Utilities\ArrayObject;

/**
 * @url http://be2.php.net/manual/en/function.is-array.php
 */
trait IsArray{
    /**
     * Finds whether a variable is an array
     * @param  mixed  &$data    The variable being evaluated.
     * @return boolean          Returns TRUE if var is an array, FALSE otherwise.
     */
    public static function isArray($data): bool{
        return (is_array($data) || $data instanceof ArrayObject);
    }


    /////////////
    // Aliases //
    /////////////

    public static function is_array($data): bool{
        return self::isArray($data);
    }
}
