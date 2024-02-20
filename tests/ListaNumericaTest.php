<?php

use PHPUnit\Framework\TestCase;

require_once 'src/ListaNumerica.php';

class ListaNumericaTest extends TestCase{
    function testSomarElementos(){
        $listaNumerica = new ListaNumerica();

        # Lista vazia
        $this->assertEquals(null, $listaNumerica->somarElementos([]));

        # Lista com números positivos
        $this->assertEquals(10, $listaNumerica->somarElementos([5, 5]));

        # Lista com números negativos
        $this->assertEquals(-15, $listaNumerica->somarElementos([-5, -10]));

        # Lista com zero
        $this->assertEquals(0, $listaNumerica->somarElementos([0, 0]));
        
        # Lista com diversos valores
        $this->assertEquals(9, $listaNumerica->somarElementos([-10, 0, -5, 20, 4]));
    }

    function testEncontrarMaiorElemento(){
        $listaNumerica = new ListaNumerica();
        # Lista vazia
        $this->assertEquals(null, $listaNumerica->encontrarMaiorElemento([0]));

        # Lista com números positivos
        $this->assertEquals(9, $listaNumerica->encontrarMaiorElemento([1, 9, 5]));

        # Lista com números negativos
        $this->assertEquals(-5, $listaNumerica->encontrarMaiorElemento([-5, -15, -9]));

        # Lista com zero
        $this->assertEquals(0, $listaNumerica->encontrarMaiorElemento([0, 0]));

        # Lista com diversos valores
        $this->assertEquals(20, $listaNumerica->encontrarMaiorElemento([-10, 0, -5, 20, 4]));
    }

    function testEncontrarMenorElemento(){
        $listaNumerica = new ListaNumerica();
        # Lista vazia
        $this->assertEquals(null, $listaNumerica->encontrarMenorElemento([0]));

        # Lista com números positivos
        $this->assertEquals(1, $listaNumerica->encontrarMenorElemento([1, 9, 5]));

        # Lista com números negativos
        $this->assertEquals(-15, $listaNumerica->encontrarMenorElemento([-5, -15, -9]));

        # Lista com zero
        $this->assertEquals(0, $listaNumerica->encontrarMenorElemento([0, 0]));

        # Lista com diversos valores
        $this->assertEquals(-10, $listaNumerica->encontrarMenorElemento([-10, 0, -5, 20, 4]));
    }

    function testOrdenarLista(){
        $listaNumerica = new ListaNumerica();
        # Lista vazia
        $this->assertSame([], $listaNumerica->ordenarLista([]));

        # Lista com números positivos
        $this->assertSame([1, 5, 9], $listaNumerica->ordenarLista([1, 9, 5]));

        # Lista com números negativos
        $this->assertSame([-15, -9, -5], $listaNumerica->ordenarLista([-5, -15, -9]));

        # Lista com zero
        $this->assertSame([0, 0], $listaNumerica->ordenarLista([0, 0]));

        # Lista com diversos valores
        $this->assertEquals([-10, -5, 0, 4, 20], $listaNumerica->ordenarLista([-10, 0, -5, 20, 4]));
    }

    function testFiltrarNumerosPares(){
        $listaNumerica = new ListaNumerica();
        # Lista vazia
        $this->assertEquals([], $listaNumerica->filtrarNumerosPares([]));

        # Lista com números positivos
        $this->assertEquals([8, 10], $listaNumerica->filtrarNumerosPares([1, 8, 5, 10]));

        # Lista com números negativos
        $this->assertEquals([-2], $listaNumerica->filtrarNumerosPares([-2, -3, -5]));

        # Lista com zero
        $this->assertEquals([0, 0], $listaNumerica->filtrarNumerosPares([0, 0]));

        # Lista com diversos valores
        $this->assertEquals([-10, 0, 20, 4], $listaNumerica->filtrarNumerosPares([-10, 0, -5, 20, 4]));

        # Lista com ímpares
        $this->assertEquals([], $listaNumerica->filtrarNumerosPares([-5, 3, 7, 19]));

        # Lista com pares
        $this->assertEquals([-4,  4, 18], $listaNumerica->filtrarNumerosPares([-4,  4, 18]));
    }
}