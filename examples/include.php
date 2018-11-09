<?php
namespace P4F\Components\Utilities;

if (is_file("packages/autoload.php")) {
    include("packages/autoload.php");
} else {
    try {
        return new Arrays;
    } catch (\Throwable $e) {
        echo "File examples/packages/autoload.php not found and another autoloader did not load class Arrays (for check if another autoloader is working). Please run composer install in package folder or in your project.";
        exit;
    }
}
