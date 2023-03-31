<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Pesquisa de Produtos</title>
        <link rel="stylesheet" href="../../../../BancoV6/css\cabecalho/style.css">
        <script src="https://kit.fontawesome.com/0dcacea947.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../../../../BancoV6/imagem/logopreta.png" />
    </head>
    
<body >
<div class='maeprod'>
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
		<?php endif;


		if ($_SESSION["isadm"] != true) :
		?>
			<div class='cabecalho'>
				<input id='menu_to' type='checkbox' />
				<label class='menu_btn' for='menu_to'>
					<span></span>
				</label>
				<ul class='menu_box'>
					<li><a class='menu_item' href='../../../../BancoV6/index.php'>Home</a></li>
					<li><a class='menu_item' href='../../../../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php' target='_parent'>Produtos</a></li>
					<li><a class='menu_item' href='../../../../BancoV6/Cadastros/Devs/devs.php'>Devs</a></li>
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
		<?php endif; ?>
<br> <br>


<?php
    include "cad_pesq_produtos_back.php";

    if ($qtde == 0) {
        echo "Não foi encontrado nenhum produto !!!<br><br>";
        return;
    }

    // Começar tabela e criar o cabeçalho

        // Criar linhas com os dados dos produtos
        
        foreach ($resultado_lista as $linha)
        {
            echo "
                <div class='quadrado'>
                    
					<div class='divdeta'>
                    <img class='imgdeta' src='../../../../BancoV6/imagem/pic1.jpeg'>
					</div>
                    <div class='nomeprod'>
                         ".$linha['nome']." <br>
                    </div>
                    <div class='precoprod'>
                        <label>R$</label> ".$linha['preco']." <br> 
                    </div>
                    <label>Quantidade em estoque : </label>".$linha['qtd']." <br><br>
                    <div class='btncomprar'>
                        <a class='link' href='cad_altera_produtos_front.php?id_produto=".$linha['id_produto']."'> Detalhes</a>&nbsp;
                    </div>
                
                </div>
                "; 
        } 
    // Fechando a tag da tabela
    //echo "</div>";
    
?>    
</div>
<div class="colorf">
        <footer class="footer">
                <div class="container">
                    <div class="rowf">
                        <div class="footer_imgc">
                            <img class="footer_img" src="../../../../BancoV6/imagem/logoembranco.png" alt="Nossa Marca">
                        </div>
                        <div class="footer-col1">
                            <h4>Navegação</h4>
                            <ul>
                                <li><a href="../../../../BancoV6/index.php">Home</a></li>
                                <li><a href="../../../../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php">Produtos</a></li>
                                <li><a href="../../../../BancoV6/Cadastros/Devs/devs.php">Devs</a></li>
                                <li><a href="../../../../BancoV6/Cadastros/patrocinadores/patro.php">Patrocinadores</a></li>
                            </ul>
                        </div>

                        <div class="footer-col">
                            <h4>Desenvolvedores</h4>
                            <ul>
                                <li><a href="../../../../BancoV6/Cadastros/Devs/devs.php">07 - Bruno Osajima Suwa</a></li>
                                <li><a href="../../../../BancoV6/Cadastros/Devs/devs.php">14 - Enrico Grossi de Carvalho</a></li>
                                <li><a href="../../../../BancoV6/Cadastros/Devs/devs.php">21 - João Pedro de Oliveira Dos Santos</a></li>
                                <li><a href="../../../../BancoV6/Cadastros/Devs/devs.php">33 - Renan Hayashi Moreira</a></li>
                                <li><a href="../../../../BancoV6/Cadastros/Devs/devs.php">34 - Vitória Vieira da Silva</a></li>
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
</body>

</html>