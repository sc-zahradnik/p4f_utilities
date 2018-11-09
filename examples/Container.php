<?php
namespace P4F\Components\Utilities;

include("include.php");
include("ArrayVar.php");

ini_set('xdebug.var_display_max_depth', -1);
ini_set('xdebug.var_display_max_children', -1);
ini_set('xdebug.var_display_max_data', -1);

$container = new Container($array);

var_dump($container);

$container->set("dkdkd", "sfsf/gaga//");

var_dump("keys in \$container:", $container->keys());
var_dump("values in \$container:", $container->values());
