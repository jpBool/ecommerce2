<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Pesquisa de Produtos</title>
        <link rel="stylesheet" href="../../../../BancoV6/css\cabecalho/style.css">
        <script src="https://kit.fontawesome.com/0dcacea947.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../../../../BancoV6/imagem/logopreta.png" />
    </head>
    
<body >
<div class='maeprod'>


<div class='cabecalho'>
            <input id='menu_to' type='checkbox' />
            <label class='menu_btn' for='menu_to'>
                <span></span>
            </label>
            <ul class='menu_box'>
                <li><a class='menu_item' href='../../../../BancoV6/index.php'>Home</a></li>
                <li><a class='menu_item' href='../../../../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php' target='_parent'>Produtos</a></li>
                <li><a class='menu_item' href='../../../../BancoV6/Cadastros/Devs/devs.php'>Devs</a></li>
                <li><a class='menu_item' href='#'>Estatísticas</a></li>
                <li><a class='menu_item' href='#'>Patrocinadores</a></li>
            </ul>
            <div class='logo'>
                <img class='logoimg' src="../../../../BancoV6/imagem/logopreta.png">
            </div>
            <a href="../../../../BancoV6/">
            <div class='pesquisa'>
                <div class='pesquisa_icone'>
                    <a href="#"><i class="fa-thin fa-magnifying-glass fa"></i></a>
                </div>
                <input class="pesquisatxt" type="text" name="pesquisa" placeholder="Pesquisar...">
            </div>
            <div class='login'>
                <div class='login_icone'>
                    <a href="../../../login.php"><i class="fa-thin fa-user fa"></i></a>
                </div>
            </div>
            <div class='carrinho'>
                <div class='carrinho_icone'>
                    <a href="#"> <i class="fa-thin fa-cart-shopping fa"></i></a>
                </div>
            </div>
        </div>
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
                    <div class='nomeprod'>
                         ".$linha['nome']." <br> <br>
                    </div>
                    <div class='precoprod'>
                        <label>R$</label> ".$linha['preco']." <br> <br>
                    </div>
                    <label>Quantidade em estoque : </label>".$linha['qtd']." <br><br><br>
                    <div class='btncomprar'>
                        <a class='link' href='cad_altera_produtos_front.php?id_produto=".$linha['id_produto']."'> Detalhes</a>&nbsp;
                    </div>
                
                </div>
                "; 
        } 
    // Fechando a tag da tabela
    //echo "</div>";
    
?>    
</div>
</body>

</html>