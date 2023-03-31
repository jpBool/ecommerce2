<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Alteração de Usuários</title>
       <link rel="stylesheet" href="../../../../BancoV6/css/cabecalho/style.css">
       <script src="https://kit.fontawesome.com/0dcacea947.js" crossorigin="anonymous"></script>
       <link rel="icon" href="../../../../BancoV6/imagem/logopreta.png">
</head>

<body class="bodyua">

       
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
       <!-- Recuperando as informações do produto -->
       <?php
       $id_usuario = $_GET["id_usuario"];
       include "cad_getinfo_usuarios_back.php";
       ?>
       <div class="maeal">
       <h1 class="hua">Alteração de Usuários</h1>
              <!-- Formulário (após as informações serem carregadas) -->
              <form class="dadost" action="cad_altera_usuarios_back.php" method="post">
                     <div class="dados">
                            <label>Código</label>
                            <input type="text" name="id_usuario" value="<?php echo $linha['id_usuario']; ?>">
                     </div>
                     <div class="dados">
                            <label>Nome</label>
                            <input type="text" name="nome" value="<?php echo $linha['nome']; ?>">
                     </div>
                     <div class="dados">
                            <label>Email</label>
                            <input type="text" name="email" value="<?php echo $linha['email']; ?>">
                     </div>
                     <div class="dados">
                            <label>Senha</label>
                            <input type="text" name="senha" value="<?php echo $linha['senha']; ?>">
                     </div>
                     <div class="dados">
                            <label>Telefone</label>
                            <input type="text" name="telefone" value="<?php echo $linha['telefone']; ?>">
                     </div>
                     <div class="cadsu">
                     <div class="cad3">
                            <input type="submit" value="Gravar">
                     </div>
                     <div class="cad3">
                            <input type="reset" value="Voltar" onclick="history.back()">
                     </div>
                     </div>
              </form>
       </div>