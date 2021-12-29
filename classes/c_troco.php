<?php
    class c_troco {
        function troco($valor) {
            $troco = [0,0,0,0,0,0];
            $notas = [100,50,20,10,5,2];

            for($i = 0; $i < count($troco); $i++) {
                $troco[$i] = floor($valor / $notas[$i]);
                $valor -= $troco[$i] * $notas[$i];
            }
            return $troco;
        }
    }
?>