<?php
namespace P4F\Components\Utilities;

include("include.php");
include("ArrayVar.php");

var_dump("\$array:", $array);
var_dump("keys in \$array:", Arrays::keys($array));
var_dump("values in \$array:", Arrays::values($array));
var_dump("unique for [".implode(", ", $array[0])."]:", Arrays::unique($array[0]));
