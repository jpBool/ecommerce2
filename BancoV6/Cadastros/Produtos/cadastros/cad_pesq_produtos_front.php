<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Pesquisa de Produtos</title>
        <link rel="stylesheet" href="../../../../BancoV6/css\cabecalho/style.css">
        <script src="https://kit.fontawesome.com/0dcacea947.js" crossorigin="anonymous"></script>
     <link rel="icon" href="../../../../BancoV6/imagem/logopreta.png" />
    </head>
<body class="bodyp">
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

<div class='maepesqp'>
<?php
    include "cad_pesq_produtos_back.php";

    if ($qtde == 0) {
        echo "Não foi encontrado nenhum produto !!!<br><br>";
        return;
    }

    // Começar tabela e criar o cabeçalho
    echo "
    <h1 class='hu'>Cadastro de Produtos</h1>
    <div class='tableu'>
        <div class='rowp'>
            <div class='cellp cellodigop cellHeaderp'>
                Cód. Produto
            </div>
            <div class='cellp cellNomep cellHeaderp'>
                Nome
            </div>
            <div class='cellp cellDescricaop cellHeaderp'>
                Descrição
            </div>
            <div class='cellp cellQtdp cellHeaderp'>
                Quantidade
            </div>
            <div class='cellp cellPrecop cellHeaderp'>
                Preço
            </div>
            <div class='cellp cellExcluidop cellHeaderp'>
                Excluido
            </div>
            <div class='cellp cellDatap cellHeaderp'>
                Data/Hora
            </div>
            <div class='cellp cellodigoVisualp cellHeaderp'>
                CodigoVisual
            </div>
            <div class='cellp cellLucrop cellHeaderp'>
                Lucro
            </div>
            <div class='cellp cellIcmsp cellHeaderp'>
                Icms
            </div>
            <div class='cellp cellImagemp cellHeaderp'>
                Imagem
            </div>
            <div class='cellp cellAcoesps'>
                &nbsp;
            </div>     
        </div>";

        // Criar linhas com os dados dos produtos
        foreach ($resultado_lista as $linha)
        {
            echo "
            <div class='rowp'>
                <div class='cellp cellodigop'>
                    ".$linha['id_produto']."
                </div>
                <div class='cellp cellNomep'>
                    ".$linha['nome']."
                </div>
                <div class='cellp cellDescricaop'>
                    ".$linha['descricao']."
                </div>
                <div class='cellp cellQtdp'>
                    ".$linha['qtd']."
                </div>
                <div class='cellp cellPrecop'>
                    ".$linha['preco']."
                </div>
                <div class='cellp cellExcluidop'>
                    ".$linha['excluido']."
                </div>
                <div class='cellp cellDatap'>
                    ".$linha['datahora_exlusao']."
                </div>
                <div class='cellp cellodigoVisualp'>
                    ".$linha['codigovisual']."
                </div>
                <div class='cellp cellLucrop'>
                    ".$linha['margem_lucro']."
                </div>
                <div class='cellp cellIcmsp'>
                    ".$linha['icms']."
                </div>
                <div class='cellp cellImagemp'>
                    ".$linha['campo_imagem']."
                </div>
                <div class='cellp cellAcoesp'>
                    <a href='cad_altera_produtos_front.php?id_produto=".$linha['id_produto']."'> Alterar</a>&nbsp;|
                    <a href='cad_exclui_produtos_front.php?id_produto=".$linha['id_produto']."'> Excluir</a>&nbsp;
                </div>
             "; 
        } 
    // Fechando a tag da tabela
    echo "</div>
    </div>";
?>    
     <div class="btnus">
        <a class="btnfinalc" href="../../../../BancoV6/Cadastros/Produtos/cadastros/cad_novo_produtos_front.php">Novo Produto</a>&nbsp;&nbsp;
        <a class="btnfinalfu" href="../../../../BancoV6/index.php">Voltar</a>&nbsp;&nbsp;
        </div>
</div>
</body>
</html>