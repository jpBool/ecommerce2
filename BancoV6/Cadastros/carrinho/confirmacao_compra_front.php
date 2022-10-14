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


<body onload="pesquisacep(cep.value);">
	<?php $cep = $_POST['cep'];
	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['uf'];
	$num = $_POST['num'];
	$comp = $_POST['comp']; ?>
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
	<div class="maef">

		<div class='tablef'>
			<h2>Resumo da compra</h2>
			<div class='rowfc'>
				<div class='cellf cellDescricao cellHeaderf'>
					Descrição
				</div>
				<div class='cellf cellPreco cellHeaderf'>
					Preço
				</div>
				<div class='cellf cellPreco cellHeaderf'>
					Qtde.
				</div>
				<div class='cellf cellPreco cellHeaderf'>
					Subtotal
				</div>
			</div>

			<?php
			$total = 0.0;

			// Criar linhas com os dados dos produtos
			foreach ($resultado_lista as $linha) {
				$idprod = $linha['cod_produto'];
				$total += floatval($linha['subtotal']);
			?>
				<div class='rowfc'>
					<div class='cellf cellDescricao'>
						<?php echo $linha['descricao']; ?>
					</div>
					<div class='cellf cellPreco'>
						<?php echo $linha['preco']; ?>
					</div>
					<div class='cellf cellPreco'>
						<?php echo $linha['qtde']; ?>
					</div>
					<div class='cellf cellPreco'>
						<?php echo $linha['subtotal']; ?>
					</div>
				</div>
			<?php
			}
			echo "<h3>Total: R$ " . number_format($total, 2, ',', '.')."</h3>";

			?>
			<hr>
			<div class="finc">
				<a class="btnfinalc" href="carrinho_front.php">Cancelar</a>&nbsp;&nbsp;
				<a class="btnfinalf" href="./finalizacao_compra_front.php">Finalizar</a>&nbsp;&nbsp;
			</div>
		</div>
		<div class="ceps">
			<form method="post" action="">
				<div class="cepsf">
					<div class="ceps1">
						<label>Cep:</label>
						<input name="cep" type="text" id="cep" value="<?php echo $cep; ?>" size="10" maxlength="9" onblur="pesquisacep(this.value);" required /><br>
						<label>Rua:</label>
						<input name="rua" type="text" value="<?php echo $bairro; ?>" id="rua" size="60" /><br>
						<label>Bairro:</label>
						<input name="bairro" type="text" value="<?php echo $bairro; ?>" id="bairro" size="40" /><br>
						<label>Cidade:</label>
						<input name="cidade" type="text" value="<?php echo $cidade; ?>" id="cidade" size="40" /><br>
					</div>
					<div class="ceps2">
						<label>Estado:</label>
						<input name="uf" type="text" value="<?php echo $estado; ?>" id="uf" size="2" /><br>
						<label>Número:</label>
						<input name="num" type="text" value="<?php echo $num; ?>" id="num" size="2" maxlegth="6" required /><br>
						<label>Complemento:</label>
						<input name="comp" type="text" value="<?php echo $comp; ?>" id="comp" size="40" /><br>
						<input class="cepsb" name="ibge" type="text" id="ibge" size="8" /><br>
					</div>
				</div>
				<h3 class="hf">Deseja confirmar?</h3>
				<input class="btnfinal" type="submit" value="Confirmar endereço">
			</form>
		</div>
	</div>
</body>
<script>
	function limpa_formulário_cep() {
		//Limpa valores do formulário de cep.
		document.getElementById('rua').value = ("");
		document.getElementById('bairro').value = ("");
		document.getElementById('cidade').value = ("");
		document.getElementById('uf').value = ("");
		document.getElementById('ibge').value = ("");
	}

	function meu_callback(conteudo) {
		if (!("erro" in conteudo)) {
			//Atualiza os campos com os valores.
			document.getElementById('rua').value = (conteudo.logradouro);
			document.getElementById('bairro').value = (conteudo.bairro);
			document.getElementById('cidade').value = (conteudo.localidade);
			document.getElementById('uf').value = (conteudo.uf);
			document.getElementById('ibge').value = (conteudo.ibge);
		} //end if.
		else {
			//CEP não Encontrado.
			limpa_formulário_cep();
			alert("CEP não encontrado.");
		}
	}

	function pesquisacep(valor) {

		//Nova variável "cep" somente com dígitos.
		var cep = valor.replace(/\D/g, '');

		//Verifica se campo cep possui valor informado.
		if (cep != "") {

			//Expressão regular para validar o CEP.
			var validacep = /^[0-9]{8}$/;

			//Valida o formato do CEP.
			if (validacep.test(cep)) {

				//Preenche os campos com "..." enquanto consulta webservice.
				document.getElementById('rua').value = "...";
				document.getElementById('bairro').value = "...";
				document.getElementById('cidade').value = "...";
				document.getElementById('uf').value = "...";
				document.getElementById('ibge').value = "...";

				//Cria um elemento javascript.
				var script = document.createElement('script');

				//Sincroniza com o callback.
				script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

				//Insere script no documento e carrega o conteúdo.
				document.body.appendChild(script);

			} //end if.
			else {
				//cep é inválido.
				limpa_formulário_cep();
				alert("Formato de CEP inválido.");
			}
		} //end if.
		else {
			//cep sem valor, limpa formulário.
			limpa_formulário_cep();
		}

	};
</script>

</html>