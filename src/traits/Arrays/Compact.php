<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.compact.php
 */
trait Compact{
    /**
     * Create array containing variables and their values
     * @param mixed   $varname1     compact() takes a variable number of parameters. Each parameter can be either a
     *                              string containing the name of the variable, or an array of variable names.
     *                              The array can contain other arrays of variable names inside it; compact()
     *                              handles it recursively.
     * @param mixed   [...]
     * @return array                Returns the output array with all the variables added to it.
     */
    public static function compact($varname1): array{
        return call_user_func_array("compact", func_get_args());
    }
}
