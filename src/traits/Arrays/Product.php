<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.array-product.php
 */
trait Product{
    /**
     * Calculate the product of values in an array
     * @param  array    $array  The array.
     * @return int              Returns the product as an integer or float.
     */
    public static function product(array $array){
        return array_product($array);
    }
}
