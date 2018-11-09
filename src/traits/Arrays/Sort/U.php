<?php
namespace P4F\Components\Utilities\traits\Arrays\Sort;

trait U{
	public static function usort(array &$array, callable $fncValueCompare){
		return usort($array, $fncValueCompare);
	}
}