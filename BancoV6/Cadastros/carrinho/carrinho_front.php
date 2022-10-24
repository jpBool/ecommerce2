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
<?php
	session_start();
$acao = $_GET['acao'] ?? '';
$codproduto = $_GET['codproduto'] ?? 0;
$codusuario = $_SESSION["id"]; // Depois precisamos alterar para pegar da $_SESSION

if ($acao == 'up') {
	if (is_array($_POST['prod']))
		$prods = $_POST['prod'];
	else
		$prods = array();
}

include "carrinho_back.php";
if ($_SESSION["usuariologado"] != "" && $qtde != 0) : ?>

	<a name="topo"></a>
	<?php
		session_start();
		include "logoff_back.php";
		include "login_back.php";
		if ($_SESSION["isadm"] == true) :
		?>
			<div class='cabecalho'>
				<input id='menu_to' type='checkbox' />
				<label class='menu_btn' for='menu_to'>
					<span></span>
				</label>
				<ul class='menu_box'>
					<li><a class='menu_item' href='../../../BancoV6/index.php'>Home</a></li>
					<li><a class='menu_item' href='../../../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php' target='_parent'>Produtos</a></li>
					<li><a class='menu_item' href='../../../BancoV6/Cadastros/Produtos/cadastros/cad_pesq_produtos_front.php' target='_parent'>Cadastro de Produtos</a></li>
					<li><a class='menu_item' href='../../../BancoV6/Cadastros/Usuarios/cadastros/cad_pesq_usuarios_front.php' target='_parent'>Cadastro de Usuários</a></li>
					<li><a class='menu_item' href='../../../BancoV6/Cadastros/Devs/devs.php'>Devs</a></li>
					<li><a class='menu_item' href='#'>Estatísticas</a></li>
					<li><a class='menu_item' href='../../../BancoV6/Cadastros/patrocinadores/patro.php'>Patrocinadores</a></li>
				</ul>
				<div class='logo'>
					<img class='logoimg' src='../../../BancoV6/imagem/logopreta.png'>
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
							<a href='../../../BancoV6/login/login_true.php'><i class='fa-thin fa-user fa'></i></a>
						<?php endif;
						if ($_SESSION["usuariologado"] == "") : ?>
							<a href='../../../BancoV6/login/login.php'><i class='fa-thin fa-user fa'></i></a>
						<?php endif; ?>
					</div>
				</div>
				<div class='carrinho'>
					<div class='carrinho_icone'>
						<a href='../../../BancoV6/Cadastros/carrinho/carrinho_front.php'><i class='fa-thin fa-cart-shopping fa'></i></a>
					</div>
				</div>
			</div>
		<?php endif;


		if ($_SESSION["isadm"] != true) :
		?>
			<div class='cabecalho'>
				<input id='menu_to' type='checkbox' />
				<label class='menu_btn' for='menu_to'>
					<span></span>
				</label>
				<ul class='menu_box'>
					<li><a class='menu_item' href='../../../BancoV6/index.php'>Home</a></li>
					<li><a class='menu_item' href='../../../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php' target='_parent'>Produtos</a></li>
					<li><a class='menu_item' href='../../../BancoV6/Cadastros/Devs/devs.php'>Devs</a></li>
					<li><a class='menu_item' href='../../../BancoV6/Cadastros/patrocinadores/patro.php'>Patrocinadores</a></li>
				</ul>
				<div class='logo'>
					<img class='logoimg' src='../../../BancoV6/imagem/logopreta.png'>
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
							<a href='../../../BancoV6/login/login_true.php'><i class='fa-thin fa-user fa'></i></a>
						<?php endif;
						if ($_SESSION["usuariologado"] == "") : ?>
							<a href='../../../BancoV6/login/login.php'><i class='fa-thin fa-user fa'></i></a>
						<?php endif; ?>
					</div>
				</div>
				<div class='carrinho'>
					<div class='carrinho_icone'>
						<a href='../../../BancoV6/Cadastros/carrinho/carrinho_front.php'><i class='fa-thin fa-cart-shopping fa'></i></a>
					</div>
				</div>
			</div>
		<?php endif; ?>
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
		<br><br><br><br><br><br>
		<div class="colorf">
		<footer class="footer">
                <div class="container">
                    <div class="rowf">
                        <div class="footer_imgc">
                            <img class="footer_img" src="../../../BancoV6/imagem/logoembranco.png" alt="Nossa Marca">
                        </div>
                        <div class="footer-col1">
                            <h4>Navegação</h4>
                            <ul>
                                <li><a href="../../../BancoV6/index.php">Home</a></li>
                                <li><a href="../../../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php">Produtos</a></li>
                                <li><a href="../../../BancoV6/Cadastros/Devs/devs.php">Devs</a></li>
                                <li><a href="../../../BancoV6/Cadastros/patrocinadores/patro.php">Patrocinadores</a></li>
                            </ul>
                        </div>

                        <div class="footer-col">
                            <h4>Desenvolvedores</h4>
                            <ul>
                                <li><a href="../../../BancoV6/Cadastros/Devs/devs.php">07 - Bruno Osajima Suwa</a></li>
                                <li><a href="../../../BancoV6/Cadastros/Devs/devs.php">14 - Enrico Grossi de Carvalho</a></li>
                                <li><a href="../../../BancoV6/Cadastros/Devs/devs.php">21 - João Pedro de Oliveira Dos Santos</a></li>
                                <li><a href="../../../BancoV6/Cadastros/Devs/devs.php">33 - Renan Hayashi Moreira</a></li>
                                <li><a href="../../../BancoV6/Cadastros/Devs/devs.php">34 - Vitória Vieira da Silva</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>Contate-nos</h4>
                            <div class="social">
                                <a href="https://instagram.com/picrollbauru?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fa-brands fa-instagram fa"></i></a>
                            </div>
                            <ul>
                                <li><a href="https://goo.gl/maps/NAnKGTvv8a1h7rFS9" target="_blank">Rua Dos Andradas 3-17,Bauru 17050-200, Brasil</a></li>
                                <br>
                                <!-- <li><a class="footer_email" href="mailto:picrollbauru@gmail.com">Nos mande um email</a></li> -->

                        </div>
                        <div class="vtop"><a href="#topo"><i class="fa-thin fa-arrow-up fa"></i></a></div>
                    </div>
                </div>
            </footer>
		</div>
	<?php endif;
if ($_SESSION["usuariologado"] == "") :
	echo '<script language="javascript">';
	echo "alert('É necessário fazer login')";
	echo '</script>';

	echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../../../BancoV6/login/login.php'>";
	?>
	<?php endif;
if ($qtde == 0 && $_SESSION["usuariologado"] != "") : ?>
		<?php
		session_start();
		include "logoff_back.php";
		include "login_back.php";
		if ($_SESSION["isadm"] == true) :
		?>
			<div class='cabecalho'>
				<input id='menu_to' type='checkbox' />
				<label class='menu_btn' for='menu_to'>
					<span></span>
				</label>
				<ul class='menu_box'>
					<li><a class='menu_item' href='../../../BancoV6/index.php'>Home</a></li>
					<li><a class='menu_item' href='../../../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php' target='_parent'>Produtos</a></li>
					<li><a class='menu_item' href='../../../BancoV6/Cadastros/Produtos/cadastros/cad_pesq_produtos_front.php' target='_parent'>Cadastro de Produtos</a></li>
					<li><a class='menu_item' href='../../../BancoV6/Cadastros/Usuarios/cadastros/cad_pesq_usuarios_front.php' target='_parent'>Cadastro de Usuários</a></li>
					<li><a class='menu_item' href='../../../BancoV6/Cadastros/Devs/devs.php'>Devs</a></li>
					<li><a class='menu_item' href='#'>Estatísticas</a></li>
					<li><a class='menu_item' href='../../../BancoV6/Cadastros/patrocinadores/patro.php'>Patrocinadores</a></li>
				</ul>
				<div class='logo'>
					<img class='logoimg' src='../../../BancoV6/imagem/logopreta.png'>
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
							<a href='../../../BancoV6/login/login_true.php'><i class='fa-thin fa-user fa'></i></a>
						<?php endif;
						if ($_SESSION["usuariologado"] == "") : ?>
							<a href='../../../BancoV6/login/login.php'><i class='fa-thin fa-user fa'></i></a>
						<?php endif; ?>
					</div>
				</div>
				<div class='carrinho'>
					<div class='carrinho_icone'>
						<a href='../../../BancoV6/Cadastros/carrinho/carrinho_front.php'><i class='fa-thin fa-cart-shopping fa'></i></a>
					</div>
				</div>
			</div>
		<?php endif;


		if ($_SESSION["isadm"] != true) :
		?>
		<a name="topo"></a>
			<div class='cabecalho'>
				<input id='menu_to' type='checkbox' />
				<label class='menu_btn' for='menu_to'>
					<span></span>
				</label>
				<ul class='menu_box'>
					<li><a class='menu_item' href='../../../BancoV6/index.php'>Home</a></li>
					<li><a class='menu_item' href='../../../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php' target='_parent'>Produtos</a></li>
					<li><a class='menu_item' href='../../../BancoV6/Cadastros/Devs/devs.php'>Devs</a></li>
					<li><a class='menu_item' href='../../../BancoV6/Cadastros/patrocinadores/patro.php'>Patrocinadores</a></li>
				</ul>
				<div class='logo'>
					<img class='logoimg' src='../../../BancoV6/imagem/logopreta.png'>
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
							<a href='../../../BancoV6/login/login_true.php'><i class='fa-thin fa-user fa'></i></a>
						<?php endif;
						if ($_SESSION["usuariologado"] == "") : ?>
							<a href='../../../BancoV6/login/login.php'><i class='fa-thin fa-user fa'></i></a>
						<?php endif; ?>
					</div>
				</div>
				<div class='carrinho'>
					<div class='carrinho_icone'>
						<a href='../../../BancoV6/Cadastros/carrinho/carrinho_front.php'><i class='fa-thin fa-cart-shopping fa'></i></a>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="maecq">

			<div class="boxfcq">
				<i class="fa-thin fa-cart-plus fa-5x fa"></i>
				<p>Seu carrinho está vazio</p>
				<a class="btnfc" href="../../../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php">Comprar</a>
			</div>
		</div>
		<div class="colorf">
		<footer class="footer">
                <div class="container">
                    <div class="rowf">
                        <div class="footer_imgc">
                            <img class="footer_img" src="../../../BancoV6/imagem/logoembranco.png" alt="Nossa Marca">
                        </div>
                        <div class="footer-col1">
                            <h4>Navegação</h4>
                            <ul>
                                <li><a href="../../../BancoV6/index.php">Home</a></li>
                                <li><a href="../../../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php">Produtos</a></li>
                                <li><a href="../../../BancoV6/Cadastros/Devs/devs.php">Devs</a></li>
                                <li><a href="../../../BancoV6/Cadastros/patrocinadores/patro.php">Patrocinadores</a></li>
                            </ul>
                        </div>

                        <div class="footer-col">
                            <h4>Desenvolvedores</h4>
                            <ul>
                                <li><a href="../../../BancoV6/Cadastros/Devs/devs.php">07 - Bruno Osajima Suwa</a></li>
                                <li><a href="../../../BancoV6/Cadastros/Devs/devs.php">14 - Enrico Grossi de Carvalho</a></li>
                                <li><a href="../../../BancoV6/Cadastros/Devs/devs.php">21 - João Pedro de Oliveira Dos Santos</a></li>
                                <li><a href="../../../BancoV6/Cadastros/Devs/devs.php">33 - Renan Hayashi Moreira</a></li>
                                <li><a href="../../../BancoV6/Cadastros/Devs/devs.php">34 - Vitória Vieira da Silva</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>Contate-nos</h4>
                            <div class="social">
                                <a href="https://instagram.com/picrollbauru?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fa-brands fa-instagram fa"></i></a>
                            </div>
                            <ul>
                                <li><a href="https://goo.gl/maps/NAnKGTvv8a1h7rFS9" target="_blank">Rua Dos Andradas 3-17,Bauru 17050-200, Brasil</a></li>
                                <br>
                                <!-- <li><a class="footer_email" href="mailto:picrollbauru@gmail.com">Nos mande um email</a></li> -->

                        </div>
                        <div class="vtop"><a href="#topo"><i class="fa-thin fa-arrow-up fa"></i></a></div>
                    </div>
                </div>
            </footer>
		</div>
	<?php endif; ?>
	</body>

</html>