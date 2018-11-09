<?php
namespace P4F\Components\Utilities\traits\Arrays;

use P4F\Components\Utilities\traits\Arrays\Key\Exists as ExistsTrait;
use P4F\Components\Utilities\traits\Arrays\Key\First as FirstTrait;
use P4F\Components\Utilities\traits\Arrays\Key\Last as LastTrait;

/**
 * @url http://be2.php.net/manual/en/function.key.php
 */
trait Key{
    use ExistsTrait;
    use FirstTrait;
    use LastTrait;

    /**
     * Fetch a key from an array.
     * @param  array  $array    The array
     * @return array|null       The key() function simply returns the key of the array element that's currently being
     *                          pointed to by the internal pointer. It does not move the pointer in any way. If the
     *                          internal pointer points beyond the end of the elements list or the array
     *                          is empty, key() returns NULL.
     */
    public static function key(array $array): ?array{
        return key($array);
    }
}
