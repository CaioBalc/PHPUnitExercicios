<?php

class MinhaClasseAvancado {
    function somar(array $lista){
        foreach ($lista as $elemento) {
            if (!is_numeric($elemento)) {
                return 0;
            }
        }
        return array_sum($lista);
    }

    function subtrair($a, $b, /*array $lista*/){
        /*
        return array_reduce(array_slice($lista, 1), function ($resultado, $elemento) {
            return $resultado - $elemento;
        }, reset($lista));
        */
        if (!is_numeric($a) ||!is_numeric($b) ) {
            return 0;
        }
        return $a - $b;
    }

    function somaCorreta($a, $b){
        return $a + $b;
    }

    function somaComArgumentosInvalidos($a, $b){
        if (!is_numeric($a) || !is_numeric($b)) {
            throw new \Exception("São aceitos, apenas, valores numéricos");
        }
        return $a + $b;
    }
}

?>