<?php

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEmpty;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertSame;
use function PHPUnit\Framework\assertTrue;

require "src/MyClass.php";

class MyClassTest extends TestCase {
    // protected function setUp(): void {
    //     $this->myClassMock = $this->createMock(MyClass::class);
    // }

    public function testAddMethods() {
        $mockBuilder = $this->getMockBuilder(MyClass::class)
            ->disableOriginalConstructor()
            ->addMethods(["Mock1"])
            ->getMock();

        assertTrue(method_exists($mockBuilder,"Mock1"));
        assertFalse(method_exists($mockBuilder,"Mock2"));
            /*
        $classMock = $this->createMock(MyClass::class);
        $methods = ["method1", "method2"];
        $this->myClass->addMethod('method1')->willReturn($methods);
        $this->myClass->addMethods('method2')->willReturn($methods);
        #$methods = $this->myClass->getMethods();
        $this->assertEquals(['method1', 'method2'], $classMock->getMethods());
        */
        // Crie um objeto mock da classe MyClass.
        // Adicione alguns métodos ao objeto mock.
        // Verifique se os métodos foram adicionados corretamente à lista de métodos.
    }

    public function testSetConstructorArgs() {
        $mockBuilder = $this->getMockBuilder(MyClass::class)
        ->setConstructorArgs([1, "Papel"])
        ->getMock();
        assertEquals(1, $mockBuilder->materialID);
        assertEquals("Papel", $mockBuilder->tipoMaterial);
        // $material = $this->createMock(MyClass::class);
        // $materialID = 1;
        // $tipoMaterial = "Papel";
        // $material->method('getMaterialID')->willReturn($materialID);
        // $material->method('getTipoMaterial')->willReturn($tipoMaterial);
        // $this->assertEquals(1, $material->getMaterialID());
        // $this->assertEquals("Papel", $material->getTipoMaterial());
        // Crie um objeto mock da classe MyClass.
        // Defina alguns argumentos para o construtor do objeto mock.
        // Verifique se os argumentos do construtor foram configurados corretamente.
    }

    public function testSetMockClassName() {
        $mockBuilder = $this->getMockBuilder(MyClass::class)
        ->disableOriginalConstructor()
        ->setMockClassName("MockName")
        ->getMock();

        assertEquals("MockName", get_class($mockBuilder));
        // Crie um objeto mock da classe MyClass.
        // Defina um nome para a classe mock.
        // Verifique se o nome da classe mock foi configurado corretamente.
    }

    public function testDisableOriginalConstructor() {
        $mockBuilder = $this->getMockBuilder(MyClass::class)
        ->disableOriginalConstructor()
        ->getMock();

        assertEmpty(get_object_vars($mockBuilder));
    
        #$classMock = $mockBuilder->getMock();
        
        #$this->assertFalse($classMock->originalConstructorDisabled());
        # Utiliza MockBuilder para desabilitar
        // Crie um objeto mock da classe MyClass.
        // Desabilite o construtor original do objeto mock.
        // Verifique se o construtor original foi desabilitado corretamente.
    }

    public function testDisableOriginalClone() {
        $mockBuilder = $this->getMockBuilder(MyClass::class)
        ->setConstructorArgs([1, "Papel"])
        #->disableOriginalConstructor()
        ->disableOriginalClone()
        ->getMock();

        $clone = clone $mockBuilder;
        assertEquals(1, $clone->materialID);
        assertEquals("Papel", $clone->tipoMaterial);
        // Crie um objeto mock da classe MyClass.
        // Desabilite a clonagem original do objeto mock.
        // Verifique se a clonagem original foi desabilitada corretamente.
    }

    // public function testDisableAutoload() {
    //     $mockBuilder = $this->getMockBuilder(MyClass::class)
    //     ->disableOriginalConstructor();

    //     // Crie um objeto mock da classe MyClass.
    //     // Desabilite o carregamento automático de classes.
    //     // Verifique se o carregamento automático foi desabilitado corretamente.
    // }

    public function testMethodWillReturn() {
        $mockBuilder = $this->getMockBuilder(MyClass::class)->disableOriginalConstructor()->getMock();
        $materialID = 1;
        $tipoMaterial = "Papel";

        $mockBuilder->method("getMaterialID")->willReturn($materialID);
        assertEquals($materialID, $mockBuilder->getMaterialID());
        // Crie um objeto mock da classe MyClass.
        // Defina uma expectativa para um método que deve retornar um valor específico.
        // Verifique se a expectativa foi configurada corretamente.
    }

    public function testMethodReturnSelf() {
        $mockBuilder = $this->getMockBuilder(MyClass::class)->disableOriginalConstructor()->getMock();
        $mockBuilder->method("returnMaterial")
        ->willReturnSelf();
        assertSame($mockBuilder, $mockBuilder->returnMaterial());
        // Crie um objeto mock da classe MyClass.
        // Defina uma expectativa para um método que deve retornar o próprio objeto.
        // Verifique se a expectativa foi configurada corretamente.
    }
}