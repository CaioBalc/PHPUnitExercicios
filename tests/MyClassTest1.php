<?php

use PHPUnit\Framework\TestCase;

require "src/MyClass1.php";

class MyClassTest extends TestCase{
    public $myClass;
    public function testAddMethods() {
        $myClass = $this->createMock(MyClass::class);

        $methods = ['create', 'read', 'update', 'delete'];
        foreach ($methods as $method) {
            $myClass->addMethod($method);
        }

        foreach ($methods as $method) {
            $this->assertTrue($myClass->hasMethod($method));
        }
    }

    public function testMaterialID() {
        $myClass = $this->createMock(MyClass::class);
        $myClass->setMaterialID('1');
        $this->assertEquals('1', $myClass->getMaterialID());
    }

    public function testTipoMaterial() {
        $myClass = $this->createMock(MyClass::class);
        $myClass->setTipoMaterial('Papel');
        $this->assertEquals('Papel', $myClass->getTipoMaterial());
    }
    /*
    function testInsert(){
        $bancoDeDados = new MyClass();
        $bancoDeDados->insert(1, 'Plástico', 50);
        $bancoDeDados->insert(2, 'Papel', 100);
        $dados = $bancoDeDados->getDados();

        $this->assertEquals([
            ['MaterialID' => 1, 'TipoMaterial' => 'Plástico', 'QuantidadeKg' => 50],
            ['MaterialID' => 2, 'TipoMaterial' => 'Papel', 'QuantidadeKg' => 100]
        ], $dados);
    }

    public function testMock()
    {
        $mock = $this->getMockBuilder('MyClass')
                     ->setConstructorArgs(['arg1', 'arg2'])
                     ->setMockClassName('MockMyClass')
                     ->disableOriginalConstructor()
                     ->disableOriginalClone()
                     ->disableAutoload()
                     ->getMock();

        $mock->method('method1')->willReturn('value1');
        $mock->method('method2')->willReturn($mock);

        $this->assertEquals('value1', $mock->method1());
        $this->assertSame($mock, $mock->method2());
    }
    */
}