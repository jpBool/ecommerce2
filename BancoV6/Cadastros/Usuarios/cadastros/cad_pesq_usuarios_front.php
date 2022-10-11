<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Pesquisa de Usuários</title>
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
                    <a href="../../../login.html"><i class="fa-thin fa-user fa"></i></a>
                </div>
            </div>
            <div class='carrinho'>
                <div class='carrinho_icone'>
                    <a href="#"> <i class="fa-thin fa-cart-shopping fa"></i></a>
                </div>
            </div>
        </div>
<div class="menuTop">
        <ul>
            <li>
                <a href='cad_novo_usuarios_front.php'>Novo Usuário!</a>
            </li>  
            <li>
                <a href="../../../index.php">+ Voltar</a>
            </li>
            <li>
                <a href="#">+ Pesquisar</a>
            </li>
        </ul>  
    </div><br>
    

<?php
    include "cad_pesq_usuarios_back.php";

    if ($qtde == 0) {
        echo "Não foi encontrado nenhum produto !!!<br><br>";
        return;
    }

    // Começar tabela e criar o cabeçalho
    echo "
    <div class='table'>
        <div class='row'>
            <div class='cell cellodigo cellHeader'>
                Cód. Usuário
            </div>
            <div class='cell cellNome cellHeader'>
                Nome
            </div>
            <div class='cell cellEmail cellHeader'>
                Email
            </div>
            <div class='cell cellSenha cellHeader'>
                Senha
            </div>
            <div class='cell cellTelefone cellHeader'>
                Telefone
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
                    ".$linha['id_usuario']."
                </div>
                <div class='cell cellNome'>
                    ".$linha['nome']."
                </div>
                <div class='cell cellEmail'>
                    ".$linha['email']."
                </div>
                <div class='cell cellSenha'>
                    ".$linha['senha']."
                </div>
                <div class='cell cellTelefone'>
                    ".$linha['telefone']."
                </div>
                <div class='cell cellAcoes'>
                    <a href='cad_altera_usuarios_front.php?id_usuario=".$linha['id_usuario']."'> Alterar</a>&nbsp;
                   
                </div>
            </div> "; 
        } 
    // Fechando a tag da tabela
    echo "</div>";
?>    
</body>
</html>