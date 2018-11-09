<?php
namespace P4F\Components\Utilities\traits\Arrays\Sort;

trait UA{
	public static function uasort(array &$array, callable $fncValueCompare){
		return uasort($array, $fncValueCompare);
	}
}