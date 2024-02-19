<?php

use PHPUnit\Framework\TestCase;

require "src/MyClass.php";

class MyClassTest extends TestCase {
    public $myClassMock;

    protected function setUp(): void {
        $this->myClassMock = $this->createMock(MyClass::class);
    }
    public function testAddMethods() {
        $this->myClass->addMethods('method1');
        $this->myClass->addMethods('method2');
        $methods = $this->myClass->getMethods();
        $this->assertEquals(['method1', 'method2'], $methods);
        // Crie um objeto mock da classe MyClass.
        // Adicione alguns métodos ao objeto mock.
        // Verifique se os métodos foram adicionados corretamente à lista de métodos.
    }

    public function testSetConstructorArgs() {
        $material = $this->createMock(MyClass::class);
        $materialID = 1;
        $tipoMaterial = "Papel";

        $material->method('getMaterialID')->willReturn($materialID);
        $material->method('getTipoMaterial')->willReturn($tipoMaterial);

        // Verifique se os argumentos do construtor foram configurados corretamente.
        $this->assertEquals(1, $material->getMaterialID());
        $this->assertEquals("Papel", $material->getTipoMaterial());
        // Crie um objeto mock da classe MyClass.
        // Defina alguns argumentos para o construtor do objeto mock.
        // Verifique se os argumentos do construtor foram configurados corretamente.
    }

    public function testSetMockClassName() {
        // Crie um objeto mock da classe MyClass.
        // Defina um nome para a classe mock.
        // Verifique se o nome da classe mock foi configurado corretamente.
    }

    public function testDisableOriginalConstructor() {
        # Utiliza MockBuilder para desabilitar
        // Crie um objeto mock da classe MyClass.
        // Desabilite o construtor original do objeto mock.
        // Verifique se o construtor original foi desabilitado corretamente.
    }

    public function testDisableOriginalClone() {
        // Crie um objeto mock da classe MyClass.
        // Desabilite a clonagem original do objeto mock.
        // Verifique se a clonagem original foi desabilitada corretamente.
    }

    public function testDisableAutoload() {
        // Crie um objeto mock da classe MyClass.
        // Desabilite o carregamento automático de classes.
        // Verifique se o carregamento automático foi desabilitado corretamente.
    }

    public function testMethodWillReturn() {
        // Crie um objeto mock da classe MyClass.
        // Defina uma expectativa para um método que deve retornar um valor específico.
        // Verifique se a expectativa foi configurada corretamente.
    }

    public function testMethodReturnSelf() {
        // Crie um objeto mock da classe MyClass.
        // Defina uma expectativa para um método que deve retornar o próprio objeto.
        // Verifique se a expectativa foi configurada corretamente.
    }
}