<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=">
	<title>Finalização de Compra</title>
	<link rel="stylesheet" href="../../../BancoV6/css/cabecalho/style.css">
	<script src="https://kit.fontawesome.com/0dcacea947.js" crossorigin="anonymous"></script>
	<link rel="icon" href="../../../BancoV6/imagem/logopreta.png" />
</head>
<body>
	<div class='cabecalho'>
		<input id='menu_to' type='checkbox' />
		<label class='menu_btn' for='menu_to'>
			<span></span>
		</label>
		<ul class='menu_box'>
			<li><a class='menu_item' href='../../../BancoV6/index.php'>Home</a></li>
			<li><a class='menu_item' href='../../../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php' target='_parent'>Produtos</a></li>
			<li><a class='menu_item' href='../../../BancoV6/Cadastros/Devs/devs.php'>Devs</a></li>
			<li><a class='menu_item' href='#'>Estatísticas</a></li>
			<li><a class='menu_item' href='#'>Patrocinadores</a></li>
		</ul>
		<div class='logo'>
			<img class='logoimg' src="../../../BancoV6/imagem/logopreta.png">
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
					<a href="../../../BancoV6/login.php" i class="fa-thin fa-user fa"></i></a>
				</div>
			</div>
			<div class='carrinho'>
				<div class='carrinho_icone'>
					<a href="../../../BancoV6/Cadastros/carrinho/carrinho_front.php"> <i class="fa-thin fa-cart-shopping fa"></i></a>
				</div>
			</div>
	</div>
<?php
    //session_start();
    $codusuario = 1; // Depois precisamos alterar para pegar da $_SESSION
    include "confirmacao_compra_back.php";
?>

<hr>
<h2>Resumo da compra</h2>
<hr>

<div class='table'>
	<div class='row'>
		<div class='cell cellDescricao cellHeader'>
			Descrição
		</div>
		<div class='cell cellPreco cellHeader'>
			Preço
		</div>
		<div class='cell cellPreco cellHeader'>
			Qtde.
		</div>
		<div class='cell cellPreco cellHeader'>
			Subtotal
		</div>
	</div>

	<?php
		$total = 0.0;

		// Criar linhas com os dados dos produtos
        foreach ($resultado_lista as $linha)
        { 
			$idprod = $linha['cod_produto'];
			$total += floatval($linha['subtotal']);
	?>
            <div class='row'>
				<div class='cell cellDescricao'>
					<?php echo $linha['descricao']; ?>
				</div>
				<div class='cell cellPreco'>
					<?php echo $linha['preco']; ?>
				</div>
				<div class='cell cellPreco'>
					<?php echo $linha['qtde']; ?>
				</div>
				<div class='cell cellPreco'>
					<?php echo $linha['subtotal']; ?>
				</div>
            </div>
	<?php 
		}  
		echo "<h3>Total: R$ ".number_format($total, 2, ',', '.');".</h3>";
	?>

    <br><br>
    <hr>

    <h3>Deseja confirmar?</h3>
	<a href="finalizacao_compra_front.php">Finalizar</a>
    <a href="carrinho_front.php">Cancelar</a>&nbsp;&nbsp;
</div>
</body>
</html>