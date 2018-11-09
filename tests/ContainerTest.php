<?php
namespace P4F\Components\Utilities\tests;

use PHPUnit\Framework\TestCase;

use P4F\Components\Utilities\Container;

final class ContainerTest extends TestCase{
    private $container;

    public function __construct(){
        parent::__construct();
        include("../examples/ArrayVar.php");
        $this->container = new Container($array);
    }

    public function testInstance(){
        $this->assertInstanceOf(
            "\\".Container::class,
            $this->container
        );
    }

    public function testCount(){
        $this->assertInternalType("int", $this->container->count());
    }

    public function testIsArray(){
        $this->assertInternalType("bool", $this->container->IsArray());
    }
}
