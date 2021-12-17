<?php
    class c_troco {
        public function getQtdeNotas($reais) {
            $qtdeNotas = [
              "100" => 0,
               "50" => 0,
               "20" => 0,
               "10" => 0,
                "5" => 0,
                "2" => 0,
            ];  
   
            if ($reais == 100) {
                $qtdeNotas["100"] = 1;
            }
            if ($reais == 100) {
                $qtdeNotas["50"] = 1;
            }
            if ($reais == 20) {
                $qtdeNotas["20"] = 1;
            }
            if ($reais == 10) {
                $qtdeNotas["10"] = 1;
            }
            if ($reais == 5) {
                $qtdeNotas["5"] = 1;
            }
            if ($reais == 2) {
                $qtdeNotas["2"] = 1;
            }   
            return $qtdeNotas;
        }
        public function getQtdeMoedad($centavos) {
            $qtdeMoedas = [
                "1" => 0,
                "0.5" => 0,
                "0.25" => 0,
                "0.1" => 0,
                "0.05" => 0,
            ];
            if ($reais == 1) {
                $qtdeMoedas["1"] = 1;
            }
            if ($reais == 0.5) {
                $qtdeMoedas["0.5"] = 1;
            }
            if ($reais == 0.25) {
                $qtdeMoedas["0.25"] = 1;
            }
            if ($reais == 0.1) {
                $qtdeMoedas["0.1"] = 1;
            }
            if ($reais == 0.05) {
                $qtdeMoedas["0.05"] = 1;
            }
            return $qtdeMoedas;
        }
    }
?>