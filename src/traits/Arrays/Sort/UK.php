<?php
namespace P4F\Components\Utilities\traits\Arrays\Sort;

trait UK{
	public static function uksort(array &$array, callable $fncKeyCompare){
		return uksort($array, $fncKeyCompare);
	}
}