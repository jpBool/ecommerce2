<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../BancoV6/css/cabecalho/style.css">
    <script src="https://kit.fontawesome.com/0dcacea947.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../BancoV6/imagem/logopreta.png" />
    <title>Home</title>
</head>

<body>
    <div class="mae">
        <div class='cabecalho'>
            <input id='menu_to' type='checkbox' />
            <label class='menu_btn' for='menu_to'>
                <span></span>
            </label>
            <ul class='menu_box'>
                <li><a class='menu_item' href='../BancoV6/index.php'>Home</a></li>
                <li><a class='menu_item' href='../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php' target='_parent'>Produtos</a></li>
                <li><a class='menu_item' href='../BancoV6/Cadastros/Devs/devs.php'>Devs</a></li>
                <li><a class='menu_item' href='#'>Estatísticas</a></li>
                <li><a class='menu_item' href='../BancoV6/Cadastros/patrocinadores/patro.php'>Patrocinadores</a></li>
            </ul>
            <div class='logo'>
                <img class='logoimg' src="../BancoV6/imagem/logopreta.png">
            </div>
            <div class='pesquisa'>
                <div class='pesquisa_icone'>
                    <a href="#"><i class="fa-thin fa-magnifying-glass fa"></i></a>
                </div>
                <input class="pesquisatxt" type="text" name="pesquisa" placeholder="Pesquisar...">
            </div>
            <div class='login'>
                <div class='login_icone'>
                    <a href="./login/login.php"><i class="fa-thin fa-user fa"></i></a>
                </div>
            </div>
            <div class='carrinho'>
                <div class='carrinho_icone'>
                    <a href="../BancoV6/Cadastros/carrinho/carrinho_front.php"><i class="fa-thin fa-cart-shopping fa"></i></a>
                </div>
            </div>
        </div>
         <!-- <a href='Cadastros/Produtos/cadastros/cad_pesq_produtos_front.php' target='_parent'>Produtos</a> -->
        <!-- <a href='Cadastros/Usuarios/cadastros/cad_pesq_usuarios_front.php' target='_parent'>Usuários</a>
        <a href='Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php' target='_parent'>Seleção de Produtos</a> -->

        <div class="corpo">
            <a name="topo"></a>
            <div class="descricao">
                <div class="desc_img1">
                    <img class="desc_img2" src="../BancoV6/imagem/fotoprinci.png">
                    <h1 class="desc_txt2">Guarde suas lembranças</h1>
                    <p class="desc_txt1">Pic roll tem como foco as memórias tomando formas de registros, para que assim o momento fique marcado de forma fisica e memorável.</p>
                    <div class="desc_btn"><a href="../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php">Nossos produtos</a></div>
                </div>
            </div>
            <br>
            <div class="prod_imgs">

                <div class="prod1">
                    <div class="prod_img1">
                    <img src="../BancoV6/imagem/imagemba2.jpeg" class="prod_img">
                    </div>
                    <div class="prod_txt1">
                        <p class="prod_txt">
                            O totem responsável por registrar momentos de forma fisica.
                        </p>
                        <div class="prod_btn1"><a href="../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php">Comprar</a></div>
                    </div>
                </div>
                <div class="prod2">
                <div class="prod_img1">
                    <img src="../BancoV6/imagem/imagemba1.jpeg" class="prod_img">
                </div>
                    <div class="prod_txt1">
                        <p class="prod_txt">
                            Tire foto com amigos para que possam se lembrar do dia.
                        </p>
                    <div class="prod_btn1"><a href="../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php">Comprar</a></div>
                    </div>
                </div>
                <div class="prod3">
                <div class="prod_img1">
                    <img src="../BancoV6/imagem/imagemba3.jpg" class="prod_img">
                </div>
                    <div class="prod_txt1">
                        <p class="prod_txt">
                            E por fim tenha registrado de forma fisica.
                        </p>
                        <div class="prod_btn1"><a href="../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php">Comprar</a></div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="prod_video">
                <div class="prod_vidt">
                    <h1 class="vidtxt1">Nosso produto</h1>
                    <p class="vidtxt">
                        Vídeo explicando o processo da captura com detalhes dos produtos.
                    </p>
                </div>
                <div class="prod_vidv">
                    <iframe class="vidv" src="https://www.youtube.com/embed/l7lHlDdTQx4" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <br>
            <footer class="footer">
                <div class="container">
                    <div class="rowf">
                        <div class="footer_imgc">
                            <img class="footer_img" src="../BancoV6/imagem/logoembranco.png" alt="Nossa Marca">
                        </div>
                        <div class="footer-col1">
                            <h4>Navegação</h4>
                            <ul>
                                <li><a href="../BancoV6/index.php">Home</a></li>
                                <li><a href="../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php">Produtos</a></li>
                                <li><a href="#">Estatísticas</a></li>
                                <li><a href="../BancoV6/Cadastros/Devs/devs.php">Devs</a></li>
                                <li><a href="#">Patrocinadores</a></li>
                            </ul>
                        </div>

                        <div class="footer-col">
                            <h4>Desenvolvedores</h4>
                            <ul>
                                <li><a href="../BancoV6/Cadastros/Devs/devs.php">07 - Bruno Osajima Suwa</a></li>
                                <li><a href="../BancoV6/Cadastros/Devs/devs.php">14 - Enrico Grossi de Carvalho</a></li>
                                <li><a href="../BancoV6/Cadastros/Devs/devs.php">21 - João Pedro de Oliveira Dos Santos</a></li>
                                <li><a href="../BancoV6/Cadastros/Devs/devs.php">33 - Renan Hayashi Moreira</a></li>
                                <li><a href="../BancoV6/Cadastros/Devs/devs.php">34 - Vitória Vieira da Silva</a></li>
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
                                <li><a class="footer_email" href="mailto:picrollbauru@gmail.com">Nos mande um email</a></li>

                        </div>
                        <div class="vtop"><a href="#topo"><i class="fa-thin fa-arrow-up fa"></i></a></div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>