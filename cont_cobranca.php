<?php
    session_start();
    $_SESSION['cobranca']['mensagem'] = '';
    $_SESSION['cobranca']['alerta'] = 'danger';
    $troco = new c_troco;
    $valorTotal = $_POST['valorTotal'];
    $valorPago = $_POST['valorPago'];
    $valorTroco = $valorTotal - $valorPago;
    if ($valorPago > $valorTotal) {
        $_SESSION['cobranca']['mensagem'] .= 'Seu troco é de R$'.$valorTroco.',00<br>';
    } else {
        $_SESSION['cobranca']['mensagem'] .= 'Você não possui troco!!';
        $_SESSION['cobranca']['alerta'] = 'success';
    }
?>