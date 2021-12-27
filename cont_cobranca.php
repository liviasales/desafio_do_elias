<?php
    session_start();
    $_SESSION['cobranca']['mensagem'] = '';
    $_SESSION['cobranca']['alerta'] = 'danger';
    $troco = new c_troco;
    $valorTotal = (string)$_POST['valorTotal'];
    $valorPago = (string)$_POST['valorPago'];
    if ($valorPago > $valorTotal) {
        return $troco;
    }
?>