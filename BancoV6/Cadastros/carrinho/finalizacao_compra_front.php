<link rel="stylesheet" href="../css/cabecalho.css">
<link rel="stylesheet" href="../css/carrinho.css">

<?php
    //session_start();
    $codusuario = 1; // Depois precisamos alterar para pegar da $_SESSION
    include "finalizacao_compra_back.php";

    echo "<h1>Compra Finalizada com Sucesso!!!</h1>";
?>

<a href="carrinho_front.php">Voltar</a>