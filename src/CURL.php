<?php
namespace P4F\Components\Utilities;

use P4F\Components\Utilities\ArrayObject;

class CURL{
    /**
     * @var resource
     */
    private $handler;

    public function __construct($options = []){
        $this->init();
        if (count($options) > 0) {
            $this->setoptArray($options);
        }
    }

    /**
     * Initialize a cURL session.
     * @url    http://php.net/manual/en/function.curl-init.php
     * @return void
     */
    public function init(): void{
        $this->handler = curl_init();
    }

    /**
     * Set multiple options for a cURL transfer
     * @url    http://php.net/manual/en/function.curl-setopt-array.php
     * @param  array|ArrayObject    $options    An array specifying which options to set and their values. The keys
     *                                          should be valid curl_setopt() constants or their integer equivalents.
     * @return bool                             Returns TRUE if all options were successfully set. If an option could
     *                                          not be successfully set, FALSE is immediately returned, ignoring
     *                                          any future options in the options array.
     */
    public function setoptArray($options): bool{
        $options = $this->optToArray($options);
        return curl_setopt_array($this->handler, $options);
    }

    /**
     * Set an option for a cURL transfer.
     * @url    http://php.net/manual/en/function.curl-setopt.php
     * @param  int    $option  The CURLOPT_XXX option to set.
     * @param  mixed  $value   The value to be set on option.
     * @return bool            Returns TRUE on success or FALSE on failure.
     */
    public function setopt(int $option, $value): bool{
        return curl_setopt($this->handler, $option, $value);
    }

    /**
     * Perform a cURL session.
     * @url    http://php.net/manual/en/function.curl-exec.php
     * @return mixed Returns TRUE on success or FALSE on failure. However, if the CURLOPT_RETURNTRANSFER option is
     *                       set, it will return the result on success, FALSE on failure.
     */
    public function exec(){
        return curl_exec($this->handler);
    }

    /**
     * Close a cURL session.
     * @url    http://php.net/manual/en/function.curl-close.php
     * @return void
     */
    public function close(): void{
        curl_close($this->handler);
    }


    /**
     * Return the last error number.
     * @url    http://php.net/manual/en/function.curl-errno.php
     * @return int Returns the error number or 0 (zero) if no error occurred.
     */
    public function errno(): int{
        return curl_errno($this->handler);
    }

    /**
     * Return a string containing the last error for the current session.
     * @url    http://php.net/manual/en/function.curl-error.php
     * @return string Returns the error message or '' (the empty string) if no error occurred.
     */
    public function error(): string{
        return curl_error($this->handler);
    }

    /**
     * URL encodes the given string.
     * @url    http://php.net/manual/en/function.curl-escape.php
     * @param  string       $string   The string to be encoded.
     * @return string|bool            Returns escaped string or FALSE on failure.
     */
    public function escape(string $string){
        return curl_escape($this->handler, $string);
    }


    /**
     * Get information regarding a specific transfer.
     * @url     http://php.net/manual/en/function.curl-getinfo.php
     * @param  int|null $options  See php manual ^^^
     * @return mixed              If opt is given, returns its value. Otherwise, returns an associative array
     *                            with the following elements (which correspond to opt), or FALSE on failure:
     *                                For more see php manual ^^^
     */
    public function getInfo(int $options = null){
        if (is_null($options)) {
            return curl_getinfo($this->handler);
        }
        return curl_getinfo($this->handler, $options);
    }


    /**
     * Reset all options of a libcurl session handle
     * @url    http://php.net/manual/en/function.curl-reset.php
     * @return void
     */
    public function reset(): void{
        curl_reset($this->handler);
    }


    /**
     * Decodes the given URL encoded string
     * @url    http://php.net/manual/en/function.curl-unescape.php
     * @param  string      $string  The URL encoded string to be decoded.
     * @return string|bool          Returns decoded string or FALSE on failure.
     */
    public function unescape(string $string){
        return curl_unescape($this->handler, $string);
    }


    /**
     * Gets cURL version information.
     * @url    http://php.net/manual/en/function.curl-version.php
     * @param  int   $age
     * @return array        For more see php manual.^^^
     */
    public function version(int $age = CURLVERSION_NOW): array{
        return curl_version($this->handler, $age);
    }

    /**
     * Check and convert ArrayObject to array
     * @param  array|ArrayObject  $options  Array or ArrayObject of options.
     * @return array|null                   Array of options.
     */
    private function optToArray($options): ?array{
        return ($options instanceof ArrayObject)? $options->toArray() : $options;
    }
}
