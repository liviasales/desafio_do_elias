<?php
    session_start();
    $_SESSION['cobranca']['mensagem'] = '';
    $_SESSION['cobranca']['alerta'] = 'danger';
    $troco = new c_troco;
    $valorTotal = $_POST['valorTotal'];
    $valorPago = $_POST['valorPago'];
    if ($valorPago > $valorTotal) {
        return $troco;
    }
?>