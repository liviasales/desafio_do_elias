<?php
    $troco = new c_troco;
    $valorTotal = (string)$_POST['valorTotal'];
    $valorPago = (string)$_POST['valorPago'];
    if ($valorPago > $valorTotal) {
        return $troco;
    }
?>