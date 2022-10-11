<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Pesquisa de Produtos</title>
        <link rel="stylesheet" href="../../../../BancoV6/css\cabecalho/style.css">
        <script src="https://kit.fontawesome.com/0dcacea947.js" crossorigin="anonymous"></script>
     <link rel="icon" href="../../../../BancoV6/imagem/logopreta.png" />
    </head>
<body>
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
<a href='cad_novo_produtos_front.php'>+ Novo Produto</a><br><br>
<a href="../../../index.php">+ Voltar</a>


<?php
    include "cad_pesq_produtos_back.php";

    if ($qtde == 0) {
        echo "Não foi encontrado nenhum produto !!!<br><br>";
        return;
    }

    // Começar tabela e criar o cabeçalho
    echo "
    <div class='maepesqp'>
    <div class='table'>
        <div class='row'>
            <div class='cell cellodigo cellHeader'>
                Cód. Produto
            </div>
            <div class='cell cellNome cellHeader'>
                Nome
            </div>
            <div class='cell cellDescricao cellHeader'>
                Descrição
            </div>
            <div class='cell cellQtd cellHeader'>
                Quantidade
            </div>
            <div class='cell cellPreco cellHeader'>
                Preço
            </div>
            <div class='cell cellExcluido cellHeader'>
                Excluido
            </div>
            <div class='cell cellData cellHeader'>
                Data/Hora
            </div>
            <div class='cell cellodigoVisual cellHeader'>
                CodigoVisual
            </div>
            <div class='cell cellLucro cellHeader'>
                Lucro
            </div>
            <div class='cell cellIcms cellHeader'>
                Icms
            </div>
            <div class='cell cellImagem cellHeader'>
                Imagem
            </div>
            <div class='cell cellAcoes'>
                &nbsp;
            </div>     
        </div>";

        // Criar linhas com os dados dos produtos
        foreach ($resultado_lista as $linha)
        {
            echo "
            <div class='row'>
                <div class='cell cellodigo'>
                    ".$linha['id_produto']."
                </div>
                <div class='cell cellNome'>
                    ".$linha['nome']."
                </div>
                <div class='cell cellDescricao'>
                    ".$linha['descricao']."
                </div>
                <div class='cell cellQtd'>
                    ".$linha['qtd']."
                </div>
                <div class='cell cellPreco'>
                    ".$linha['preco']."
                </div>
                <div class='cell cellExcluido'>
                    ".$linha['excluido']."
                </div>
                <div class='cell cellData'>
                    ".$linha['datahora_exlusao']."
                </div>
                <div class='cell cellodigoVisual'>
                    ".$linha['codigovisual']."
                </div>
                <div class='cell cellLucro'>
                    ".$linha['margem_lucro']."
                </div>
                <div class='cell cellIcms'>
                    ".$linha['icms']."
                </div>
                <div class='cell cellImagem'>
                    ".$linha['campo_imagem']."
                </div>
                <div class='cell cellAcoes'>
                    <a href='cad_altera_produtos_front.php?id_produto=".$linha['id_produto']."'> Alterar</a>&nbsp;
                    <a href='cad_exclui_produtos_front.php?id_produto=".$linha['id_produto']."'> Excluir</a>&nbsp;
                </div>
            </div> "; 
        } 
    // Fechando a tag da tabela
    echo "</div>
    </div>";
?>    
</body>
</html>