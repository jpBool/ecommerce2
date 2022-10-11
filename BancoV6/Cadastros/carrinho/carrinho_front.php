<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Carrinho</title>
	<link rel="stylesheet" href="../../../BancoV6/css/cabecalho/style.css">
	<script src="https://kit.fontawesome.com/0dcacea947.js" crossorigin="anonymous"></script>
	<link rel="icon" href="../../../BancoV6/imagem/logopreta.png" />
</head>

<body class="bodyc">
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
	/*
Extraído de:
http://www.davidchc.com.br/video-aula/php/carrinho-de-compras-com-php/
vídeo aula de:https://www.youtube.com/watch?v=CBzfcl-Qk1c

Adaptado por Profa. Ariane Scarelli para banco de dados PostgreSQL (ago/2016)
Adaptado por Prof. Victor rodrigues (ago/2022)
*/
	//session_start();
	$acao = $_GET['acao'] ?? '';
	$codproduto = $_GET['codproduto'] ?? 0;
	$codusuario = 1; // Depois precisamos alterar para pegar da $_SESSION

	if ($acao == 'up') {
		if (is_array($_POST['prod']))
			$prods = $_POST['prod'];
		else
			$prods = array();
	}

	include "carrinho_back.php";
	// $sql ="select * from pic_usuario where "
	// $contagem = "select count(*) from pic_carrinho where cod_usuario= "
	?>
	<div class="maec">
		<div class="tabela">
			<h1 class="hc1">Meu carrinho</h1>

			<div class='tablec'>
				<div class='rowch'>
					<div class='cellc cellDescricaoc cellHeader'>
					</div>
					<div class='cellc cellPreco cellHeader'>
						<p>Preço</p>
					</div>
					<div class='cellc cellAcoes'>
						&nbsp;
					</div>
				</div>

				<form action="?acao=up" method="post" class="formc">

					<?php
					$total = 0.0;

					// Criar linhas com os dados dos produtos
					foreach ($resultado_lista as $linha) {
						$idprod = $linha['cod_produto'];
						$total += floatval($linha['subtotal']);
					?>
						<div class='rowc'>
							<div class="cellc">
								<img class="imgc" src="../../../BancoV6/imagem/imagemba2.jpeg">
							</div>
							<div class='cellc cellDescricaol'>
								<?php echo $linha['descricao']; ?>
							</div>
							<div class='cellc cellPreco'>
								<strong> R$ <?php echo $linha['preco']; ?></strong>
							</div>
							<!-- <div class='cellc cellPrecoq'>
							<div class="boxc">
								<label>qtd:</label>
								<input type="text" size="3" name="prod[<?php echo $idprod; ?>]" value="<?php echo $linha['qtde']; ?>" />
							</div>
						</div> -->
							<!-- <div class='cellc cellPreco'>
								<?php //echo $linha['subtotal']; 
								?> -->
						</div>
						<div class="baixoc">
							<div class='cellc cellPrecoq'>
								<div class="boxc">
									<label>qtd:</label>
									<input type="number" min="1" max="100" id="qtdc" name="prod[<?php echo $idprod; ?>]" value="<?php echo $linha['qtde']; ?>" />
								</div>
							</div>
							|
							<div class='cellc cellAcoes'>
								<a href='?acao=del&codproduto=<?php echo $idprod; ?>'>Excluir</a>
							</div>
						</div>
			</div>

		<div class="totalc">
		<?php
					}
					echo "Total da compra: R$ " . number_format($total, 2, ',', '.');
		?>
		<input class="atuac" type="submit" value="Atualizar Carrinho" />
			<a class="btncon" href="../../../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php">Continuar Comprando</a>&nbsp;&nbsp;
		</div>

		
		</form>

		</div>
	<div class="subtc">
		<p class="subtcs">Subtotal (<?php echo $linha['qtde']; ?> itens): R$ <?php echo number_format($total, 2, ',', '.'); ?></strong></p>
		<div class="btnfing">
		<a class="btnfin" href="./confirmacao_compra_front.php">Finalizar Compra</a>
		</div>
	</div>

	</div>
</body>

</html>