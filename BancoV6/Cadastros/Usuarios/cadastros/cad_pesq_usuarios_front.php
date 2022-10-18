<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Pesquisa de Usuários</title>
    <link rel="stylesheet" href="../../../../BancoV6/css/cabecalho/style.css">
	<script src="https://kit.fontawesome.com/0dcacea947.js" crossorigin="anonymous"></script>
	<link rel="icon" href="../../../../BancoV6/imagem/logopreta.png">
</head>

<body class="bodyus">
    <div class='cabecalho'>
        <div class='hamburguer_menu'>
            <input id='menu_to' type='checkbox' />
            <label class='menu_btn' for='menu_to'>
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
    <div class='maeus'>
        <?php
        include "cad_pesq_usuarios_back.php";

        if ($qtde == 0) {
            echo "Não foi encontrado nenhum usuario !!!<br><br>";
            return;
        }

        // Começar tabela e criar o cabeçalho
        echo "<h1 class='hu'>Pesquisa de Usuários</h1>
    <div class='tableu'>
        <div class='rowu'>
            <div class='cellus cellCodigou cellHeaderu'>
                Cód. Usuário
            </div>
            <div class='cellus cellNomeu cellHeaderu'>
                Nome
            </div>
            <div class='cellus cellEmail cellHeaderu'>
                Email
            </div>
            <div class='cellus cellSenha cellHeaderu'>
                Senha
            </div>
            <div class='cellus cellTelefone cellHeaderu'>
                Telefone
            </div>
            <div class='cellus cellAcoesu'>
                &nbsp;
            </div>     
        </div>";

        // Criar linhas com os dados dos produtos
        foreach ($resultado_lista as $linha) {
            echo "
            <div class='rowu'>
                <div class='cellus cellCodigou'>
                    " . $linha['id_usuario'] . "
                </div>
                <div class='cellus cellNomeu'>
                    " . $linha['nome'] . "
                </div>
                <div class='cellus cellEmail'>
                    " . $linha['email'] . "
                </div>
                <div class='cellus cellSenha'>
                    " . $linha['senha'] . "
                </div>
                <div class='cellus cellTelefone'>
                    " . $linha['telefone'] . "
                </div>
                <div class='cellus cellAcoesu'>
                    <a href='cad_altera_usuarios_front.php?id_usuario=" . $linha['id_usuario'] . "'> Alterar</a>&nbsp;
                   
                </div>
            </div> ";
        }
        // Fechando a tag da tabela
        echo "</div>";
        ?>
        <div class="btnus">
        <a class="btnfinalc" href="../../../../BancoV6/Cadastros/Usuarios/cadastros/cad_novo_usuarios_front.php">Novo Usuário</a>&nbsp;&nbsp;
        <a class="btnfinalfu" href="../../../../BancoV6/index.php">Voltar</a>&nbsp;&nbsp;
        </div>
    </div>
</body>

</html>