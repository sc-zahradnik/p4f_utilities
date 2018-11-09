<?php
namespace P4F\Components\Utilities\traits\Arrays;

/**
 * @url http://php.net/manual/en/function.array-chunk.php
 */
trait Chunk{
    /**
     * Split an array into chunks
     * @param  array        $array          The array to work on
     * @param  int          $size           The size of each chunk
     * @param  bool|boolean $preserveKeys   When set to TRUE keys will be preserved. Default is FALSE
     *                                      which will reindex the chunk numerically
     * @return array|false                  Returns a multidimensional numerically indexed array,
     *                                      starting with zero, with each dimension containing size elements.
     */
    public static function chunk(array $array, int $size, bool $preserveKeys = false): ?array{
        return array_chunk($array, $size, $preserveKeys);
    }
}
