<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Pesquisa de Produtos</title>
        <link rel="stylesheet" href="../../../../BancoV6/css/cabecalho/style.css">

    </head>
<body>

<style>
    .body
    {
        height: 10em;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background-color: rgb(226, 226, 226);
    }

    .quadrado 
    {
        align-items: center;
        text-align: center;
        width: 250px;
        height: 340px;
        padding: 1px;
        border-width: 3px;
        border-color: black;
        border-style: solid;
        display: inline-block;
        border-radius: 20px;
     
    }
</style>
<div class='cabecalho'>
    <div class='hamburguer_menu'>
        <input id='menu_to' type='checkbox'/>
        <label class ='menu_btn' for='menu_to'>
            <span></span>
        </label>
        <ul class='menu_box'>
            <li><a class='menu_item' href='../../../../BancoV6/index.php'>Home</a></a></li>
            <li><a class='menu_item' href='../../../../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php' target='_parent'>Produtos</a></a></li>
            <li><a class='menu_item' href='../../../../BancoV6/Cadastros/Usuarios/cadastros/cad_pesq_usuarios_front.php' target='_parent'>Usuários</a></a></li>
            <li><a class='menu_item' href='#'>Devs</a></a></li>
            <li><a class='menu_item' href='#'>Estatísticas</a></a></li> 
       </ul>
    </div>
</div>

<a href="../../../index.php">+ Voltar</a>
<br> <br>


<?php
    include "cad_pesq_produtos_back.php";

    if ($qtde == 0) {
        echo "Não foi encontrado nenhum produto !!!<br><br>";
        return;
    }

    // Começar tabela e criar o cabeçalho

        // Criar linhas com os dados dos produtos
        foreach ($resultado_lista as $linha)
        {
            echo "
                <div class='quadrado'>
                    <br>
                    <img src='../img/caixa.png' width='150px'> <br><br>
                    ".$linha['nome']." <br> <br>
                    <label>Preço : R$</label> ".$linha['preco']." <br> 
                    <label>Quantidade em estoque : </label>".$linha['qtd']." <br><br>
                    <a href='cad_altera_produtos_front.php?id_produto=".$linha['id_produto']."'> Comprar</a>&nbsp;
                </div>
                </div>&nbsp&nbsp&nbsp
                "; 
        } 
    // Fechando a tag da tabela
    echo "</div>";
?>    
</body>
</html>