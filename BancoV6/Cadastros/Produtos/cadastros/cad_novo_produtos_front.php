<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Formulário de Cadastro de Produtos - Tabela Produtos CRUD</title>
    <link rel="stylesheet" href="../../../../BancoV6/css\cabecalho/style.css">
    <script src="https://kit.fontawesome.com/0dcacea947.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../../../../BancoV6/imagem/logopreta.png" />
</head>

<body class="bodypn">

    <?php
    session_start();
    include "logoff_back.php";
    include "login_back.php";
    ?>
    <div class='cabecalho'>
        <input id='menu_to' type='checkbox' />
        <label class='menu_btn' for='menu_to'>
            <span></span>
        </label>
        <ul class='menu_box'>
            <li><a class='menu_item' href='../../../../BancoV6/index.php'>Home</a></li>
            <li><a class='menu_item' href='../../../../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php' target='_parent'>Produtos</a></li>
            <li><a class='menu_item' href='../../../../BancoV6/Cadastros/Produtos/cadastros/cad_pesq_produtos_front.php' target='_parent'>Cadastro de Produtos</a></li>
            <li><a class='menu_item' href='../../../../BancoV6/Cadastros/Usuarios/cadastros/cad_pesq_usuarios_front.php' target='_parent'>Cadastro de Usuários</a></li>
            <li><a class='menu_item' href='../../../../BancoV6/Cadastros/Devs/devs.php'>Devs</a></li>
            <li><a class='menu_item' href='../../../../BancoV6/Cadastros/estatisticas/estatistica.php'>Estatísticas</a></li>
            <li><a class='menu_item' href='../../../../BancoV6/Cadastros/patrocinadores/patro.php'>Patrocinadores</a></li>
        </ul>
        <div class='logo'>
            <img class='logoimg' src='../../../../BancoV6/imagem/logopreta.png'>
        </div>
        <div class='pesquisa'>
            <div class='pesquisa_icone'>
                <a href='#'><i class='fa-thin fa-magnifying-glass fa'></i></a>
            </div>
            <input class='pesquisatxt' type='text' name='pesquisa' placeholder='Pesquisar...'>
        </div>
        <div class='login'>
            <div class='login_icone'>
                <?php if ($_SESSION["usuariologado"] != "") : ?>
                    <a href='../../../../BancoV6/login/login_true.php'><i class='fa-thin fa-user fa'></i></a>
                <?php endif;
                if ($_SESSION["usuariologado"] == "") : ?>
                    <a href='../../../../BancoV6/login/login.php'><i class='fa-thin fa-user fa'></i></a>
                <?php endif; ?>
            </div>
        </div>
        <div class='carrinho'>
            <div class='carrinho_icone'>
                <a href='../../../../BancoV6/Cadastros/carrinho/carrinho_front.php'><i class='fa-thin fa-cart-shopping fa'></i></a>
            </div>
        </div>
    </div>
    <div class="maepn">
        <h1 class="hua">Cadastro de Produtos</h1>

        <form action="cad_novo_produtos_back.php" method="post">
            <div class="cepsf">
                <div class="ceps1">
                    <label>Nome:</label>
                    <input type="text" name="nome" />
                    <label>Descrição:</label>
                    <input type="text" name="descricao">
                    <label>Quantidade:</label>
                    <input type="text" name="qtd">
                    <label>Preço:</label>
                    <input type="text" name="preco" />
                    <label>Data:</label>
                    <input type="text" name="datahora_exlusao" />
                </div>
                <div class="ceps2">
                    <label>Código Visual:</label>
                    <input type="text" name="codigovisual" />
                    <label>Margem de lucro:</label>
                    <input type="text" name="margem_lucro" />
                    <label>ICMS:</label>
                    <input type="text" name="icms" />
                    <label>Campo Imagem:</label>
                    <input type="text" name="campo_imagem" />
                </div>
            </div>
            <div class="btnus">
                <input class="btnfinalc" type="submit" name="button" id="button" value="Enviar" />
                <a class="btnfinalfus" href='cad_pesq_produtos_front.php'>Voltar</a><br><br>
            </div>
        </form>
    </div>
</body>

</html>