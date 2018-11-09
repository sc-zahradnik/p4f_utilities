<?php
namespace P4F\Components\Utilities\traits\Arrays;

use P4F\Components\Utilities\traits\Arrays\Count\Values as ValuesTrait;

/**
 * @url http://be2.php.net/manual/en/function.count.php
 * @url http://be2.php.net/manual/en/function.sizeof.php
 */
trait Count{
    use ValuesTrait;

    public static function count($array, int $mode = null){
        $mode = $mode ?? COUNT_NORMAL;
        return count($array, $mode);
    }


    /////////////
    // Aliases //
    /////////////

    public static function sizeof($array, int $mode = null){
        return self::count($array, $mode);
    }
}
