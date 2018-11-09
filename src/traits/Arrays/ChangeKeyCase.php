<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://php.net/manual/en/function.array-change-key-case.php
 */
trait ChangeKeyCase{
    /**
     * Changes the case of all keys in an array.
     * @param  array        $array  The array to work on
     * @param  int|null     $case   CASE_LOWER|CASE_UPPER 
     * @return array|false          Returns an array with its keys lower or uppercased, or FALSE if array is not an array.
     */
    public static function changeKeyCase(array $array, int $case = null): ?array{
        $case = $case ?? CASE_LOWER;
        return array_change_key_case($array, $case);
    }


    /////////////
    // Aliases //
    /////////////

    public static function change_keycase(array $array, int $case = null){
        return self::changeKeyCase($array, $case);
    }
    public static function changekey_case(array $array, int $case = null){
        return self::changeKeyCase($array, $case);
    }
    public static function change_key_case(array $array, int $case = null){
        return self::changeKeyCase($array, $case);
    }
}
