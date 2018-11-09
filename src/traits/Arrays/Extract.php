<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://be2.php.net/manual/en/function.extract.php
 */
trait Extract{
    /**
     * Import variables into the current symbol table from an array.
     * @param  array       $array  An associative array. This function treats keys as variable names and values
     *                             as variable values. For each key/value pair it will create a variable in
     *                             the current symbol table, subject to flags and prefix parameters.
     *                             You must use an associative array; a numerically indexed array will not produce
     *                             results unless you use EXTR_PREFIX_ALL or EXTR_PREFIX_INVALID.
     * @param  int|null    $flags  The way invalid/numeric keys and collisions are treated is determined by
     *                             the extraction flags. It can be one of the following values:
     *                                  EXTR_OVERWRITE
     *                                      If there is a collision, overwrite the existing variable.
     *                                  EXTR_SKIP
     *                                      If there is a collision, don't overwrite the existing variable.
     *                                  EXTR_PREFIX_SAME
     *                                      If there is a collision, prefix the variable name with prefix.
     *                                  EXTR_PREFIX_ALL
     *                                      Prefix all variable names with prefix.
     *                                  EXTR_PREFIX_INVALID
     *                                      Only prefix invalid/numeric variable names with prefix.
     *                                  EXTR_IF_EXISTS
     *                                      Only overwrite the variable if it already exists in the current symbol
     *                                      table, otherwise do nothing. This is useful for defining a list of valid
     *                                      variables and then extracting only those variables you have defined out of
     *                                      $_REQUEST, for example.
     *                                  EXTR_PREFIX_IF_EXISTS
     *                                      Only create prefixed variable names if the non-prefixed version of the same
     *                                      variable exists in the current symbol table.
     *                                  EXTR_REFS
     *                                      Extracts variables as references. This effectively means that the values
     *                                      of the imported variables are still referencing the values of the array
     *                                      parameter. You can use this flag on its own or combine it with any other
     *                                      flag by OR'ing the flags.
     *                             If flags is not specified, it is assumed to be EXTR_OVERWRITE.
     * @param  string|null $prefix Note that prefix is only required if flags is EXTR_PREFIX_SAME, EXTR_PREFIX_ALL,
     *                             EXTR_PREFIX_INVALID or EXTR_PREFIX_IF_EXISTS. If the prefixed result is not a
     *                             valid variable name, it is notimported into the symbol table. Prefixes are
     *                             automatically separated from the array key by an underscore character.
     * @return int                 Returns the number of variables successfully imported into the symbol table.
     */
    public static function extract(array $array, int $flags = null, string $prefix = null): int{
        $flags = $flags ?? EXTR_OVERWRITE;
        return extract($array, $flags, $prefix);
    }
}
