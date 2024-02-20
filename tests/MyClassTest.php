<?php

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEmpty;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertSame;
use function PHPUnit\Framework\assertTrue;

require "src/MyClass.php";

class MyClassTest extends TestCase {

    public function testAddMethods() {
        $mockBuilder = $this->getMockBuilder(MyClass::class)
            ->disableOriginalConstructor()
            ->addMethods(["Mock1"])
            ->getMock();

        assertTrue(method_exists($mockBuilder,"Mock1"));
        assertFalse(method_exists($mockBuilder,"Mock2"));
    }

    public function testSetConstructorArgs() {
        $mockBuilder = $this->getMockBuilder(MyClass::class)
        ->setConstructorArgs([1, "Papel"])
        ->getMock();
        assertEquals(1, $mockBuilder->materialID);
        assertEquals("Papel", $mockBuilder->tipoMaterial);
    }

    public function testSetMockClassName() {
        $mockBuilder = $this->getMockBuilder(MyClass::class)
        ->disableOriginalConstructor()
        ->setMockClassName("MockName")
        ->getMock();

        assertEquals("MockName", get_class($mockBuilder));
    }

    public function testDisableOriginalConstructor() {
        $mockBuilder = $this->getMockBuilder(MyClass::class)
        ->disableOriginalConstructor()
        ->getMock();

        assertEmpty(get_object_vars($mockBuilder));
    }

    public function testDisableOriginalClone() {
        $mockBuilder = $this->getMockBuilder(MyClass::class)
        ->setConstructorArgs([1, "Papel"])
        ->disableOriginalClone()
        ->getMock();

        $clone = clone $mockBuilder;
        assertEquals(1, $clone->materialID);
        assertEquals("Papel", $clone->tipoMaterial);
    }

    public function testMethodWillReturn() {
        $mockBuilder = $this->getMockBuilder(MyClass::class)->disableOriginalConstructor()->getMock();
        $materialID = 1;
        $tipoMaterial = "Papel";

        $mockBuilder->method("getMaterialID")->willReturn($materialID);
        assertEquals($materialID, $mockBuilder->getMaterialID());
    }

    public function testMethodReturnSelf() {
        $mockBuilder = $this->getMockBuilder(MyClass::class)->disableOriginalConstructor()->getMock();
        $mockBuilder->method("returnMaterial")
        ->willReturnSelf();
        assertSame($mockBuilder, $mockBuilder->returnMaterial());
    }
}