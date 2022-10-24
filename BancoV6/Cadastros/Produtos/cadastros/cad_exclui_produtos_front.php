<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de Produtos</title>
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
					<li><a class='menu_item' href='#'>Estatísticas</a></li>
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
    <?php
    $id_produto = $_GET["id_produto"];
    include "cad_getinfo_produto_back.php";
    ?>
    <div class="maepn">
        <h1 class="hua">Exclusão de Produtos</h1>
        <!-- Formulário (após as informações serem carregadas) -->
        <form action="cad_exclui_produtos_back.php" method="post">
            <div class="cepsf">
                <div class="ceps1">
                    <label>Código do produto</label>
                    <input type="text" name="id_produto" value="<?php echo $linha['id_produto']; ?>" readonly>
                    <label>Nome</label>
                    <input type="text" name="nome" value="<?php echo $linha['nome']; ?>">
                    <label>Descrição</label>
                    <input type="text" name="descricao" value="<?php echo $linha['descricao']; ?>">
                    <label>Quantidade</label>
                    <input type="text" name="qtd" value="<?php echo $linha['qtd']; ?>">
                </div>
                <div class="ceps2">
                    <label>Preço</label>
                    <input type="text" name="preco" value="<?php echo $linha['preco']; ?>">
                    <label>Código Visual</label>
                    <input type="text" name="codigovisual" value="<?php echo $linha['codigovisual']; ?>">
                    <label>Custo</label>
                    <input type="text" name="custo" value="<?php echo $linha['custo']; ?>">
                    <label>lucro</label>
                    <input type="text" name="margem_lucro" value="<?php echo $linha['margem_lucro']; ?>">
                </div>
            </div>
            <br><br>
            <div class="btnus">
            <input class="btnfinalc" type="submit" value="Confirma exclusão">
            <input class="btnfinalfus" type="button" value="Editar" onclick="location.href='cad_altera_produtos_front.php?id_produto=<?php echo $id_produto ?>';">
            <input class="btnfinalfus" type="button" value="Voltar" onclick="location.href='cad_pesq_produtos_front.php';">
            </div>
        </form>
    </div>
</body>

</html>