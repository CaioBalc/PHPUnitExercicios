<?php

class ListaNumerica{
    function somarElementos(array $lista): int{
        return array_sum($lista);
    }
    
    function encontrarMaiorElemento(array $lista){
        return max($lista);
    }

    function encontrarMenorElemento(array $lista){
        return min($lista);
    }

    function ordenarLista(array $lista){
        sort($lista);
        return $lista;
    }

    function filtrarNumerosPares(array $lista){
        return array_values(array_filter($lista, function ($numero) {
            return $numero % 2 === 0;
        }));
    }
}