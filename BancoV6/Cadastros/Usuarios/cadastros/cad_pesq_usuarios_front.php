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