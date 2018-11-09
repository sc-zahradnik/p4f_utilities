<?php
namespace P4F\Components\Utilities\tests;

use PHPUnit\Framework\TestCase;

use P4F\Components\Utilities\Arrays;

final class ArraysTest extends TestCase{
    private $array = [];

    public function __construct(){
        parent::__construct();
        include("../examples/ArrayVar.php");
        $this->array = $array;
    }

    public function testCount(){
        $this->assertInternalType("int", Arrays::count($this->array));
    }

    public function testIsArray(){
        $this->assertInternalType("bool", Arrays::IsArray($this->array));
    }
}
