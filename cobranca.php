<!DOCTYPE html>
<html lang="pt-br">
<?php
    require_once('classes/c_troco.php');
    $troco = new c_troco();
?>
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
        <form method="POST" action="cont_cobranca.php">                        
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