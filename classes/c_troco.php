<?php
    class c_troco {
        public $troco = [0,0,0,0,0,0];
        public $notas = [100,50,20,10,5,2];
        public function troco($valor) {           

            for($i = 0; $i < count($this -> troco); $i++) {
                $this -> troco[$i] = floor($this -> valor / $this -> notas[$i]);
                $this -> valor -= $this -> troco[$i] * $this -> notas[$i];
            }
            return $this -> troco;
        }
    }
?>