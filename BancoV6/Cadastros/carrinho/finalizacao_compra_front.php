<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra com sucesso</title>
    <link rel="stylesheet" href="../../../BancoV6/css/cabecalho/style.css">
	<script src="https://kit.fontawesome.com/0dcacea947.js" crossorigin="anonymous"></script>
	<link rel="icon" href="../../../BancoV6/imagem/logopreta.png">
</head>
<body>
    
<?php
    session_start();
    $codusuario = $_SESSION["id"]; // Depois precisamos alterar para pegar da $_SESSION
    include "finalizacao_compra_back.php";
    include "logoff_back.php";
?>
    <div class="maefc">
        <div class="boxfc">
        <i class="fa fa-thin fa-face-smile-wink fa-10x"></i>
        <p>Obrigado por comprar conosco!</p>
        <a class="btnfc" href="../../../BancoV6/login/logoff_back.php">Compre novamente</a>
        </div>
    </div>

</body>
</html>