<?php
    session_start();
    $_SESSION['cobranca']['mensagem'] = '';
    $_SESSION['cobranca']['alerta'] = 'danger';
    $valorTotal = $_POST['valorTotal'];
    $valorPago = $_POST['valorPago'];
    $valorTroco = $valorPago - $valorTotal;
    print_r(troco(90));
    function troco($valor) {           
        $troco = [0,0,0,0,0,0];
        $notas = [100,50,20,10,5,2];
        for($i = 0; $i < count($troco); $i++) {
            $troco[$i] = floor($valor / $notas[$i]);
            $valor -= $troco[$i] * $notas[$i];
        }
        return $troco;
    }
    if ($valorPago > $valorTotal) {
        $_SESSION['cobranca']['mensagem'] .= 'Seu troco é de R$'.$valorTroco.',00<br>';
        $_SESSION['cobranca']['mensagem'] .= 'E a sequência de notas recebidas por você é: '.$troco[$i].'<br>';
        $_SESSION['cobranca']['alerta'] = 'success';
    } else {
        $_SESSION['cobranca']['mensagem'] .= 'Você não possui troco!!';        
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio do Elias</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>
<?php if (isset($_SESSION['cobranca']['alerta']) && !empty($_SESSION['cobranca']['alerta'])) { ?>
    <div class="row">
        <div class="col-md-12 alert alert-<?= $_SESSION['cobranca']['alerta']; ?>" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <span style="font-size: 16px;"><?= $_SESSION['cobranca']['mensagem']; ?></span>        
        </div>
    </div>
<?php } ?>
    <div class="container">
            <div class="tittle">
                <h3>Desafio do troco</h3>
                <small>By: Elias</small>
            </div>
        <form method="POST" action="">                        
            <div class="form-group">
                <label for="exampleInputEmail1"><b>Valor total dos produtos:</b></label>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">R$</span>
                </div>
                <input type="text" name="valorTotal" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Insira o valor total da sua compra." required="required">
                <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"><b>Valor pago:</b></label>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">R$</span>
                </div>
                <input type="text" name="valorPago" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Insira o valor pago por você." required="required">
                <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                </div>
                </div>
            </div>
            <input type="submit" value="Calcular troco" class="btn btn-success btn-lg btn-block">
        </form>
    </div>
</body>
</html>