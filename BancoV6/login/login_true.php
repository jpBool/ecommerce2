<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="../../BancoV6/css/cabecalho/style.css">
       <script src="https://kit.fontawesome.com/0dcacea947.js" crossorigin="anonymous"></script>
       <link rel="icon" href="../../BancoV6/imagem/logopreta.png" />
       <title>Perfil</title>
</head>

<body class="bodydevs">
       <?php
       session_start();
       if ($_SESSION["isadm"] == true) :
       ?>
              <div class='cabecalho'>
                     <input id='menu_to' type='checkbox' />
                     <label class='menu_btn' for='menu_to'>
                            <span></span>
                     </label>
                     <ul class='menu_box'>
                            <li><a class='menu_item' href='../../BancoV6/index.php'>Home</a></li>
                            <li><a class='menu_item' href='../../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php' target='_parent'>Produtos</a></li>
                            <li><a class='menu_item' href='../../BancoV6/Cadastros/Produtos/cadastros/cad_pesq_produtos_front.php' target='_parent'>Cadastro de Produtos</a></li>
                            <li><a class='menu_item' href='../../BancoV6/Cadastros/Usuarios/cadastros/cad_pesq_usuarios_front.php' target='_parent'>Cadastro de Usuários</a></li>
                            <li><a class='menu_item' href='../../BancoV6/Cadastros/Devs/devs.php'>Devs</a></li>
                            <li><a class='menu_item' href='../../BancoV6/Cadastros/estatisticas/estatistica.php'>Estatísticas</a></li>
                            <li><a class='menu_item' href='../../BancoV6/Cadastros/patrocinadores/patro.php'>Patrocinadores</a></li>
                     </ul>
                     <div class='logo'>
                            <img class='logoimg' src='../../BancoV6/imagem/logopreta.png'>
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
                                          <a href='../../BancoV6/login/login_true.php'><i class='fa-thin fa-user fa'></i></a>
                                   <?php endif;
                                   if ($_SESSION["usuariologado"] == "") : ?>
                                          <a href='../../BancoV6/login/login.php'><i class='fa-thin fa-user fa'></i></a>
                                   <?php endif; ?>
                            </div>
                     </div>
                     <div class='carrinho'>
                            <div class='carrinho_icone'>
                                   <a href='../../BancoV6/Cadastros/carrinho/carrinho_front.php'><i class='fa-thin fa-cart-shopping fa'></i></a>
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
                            <li><a class='menu_item' href='../../BancoV6/index.php'>Home</a></li>
                            <li><a class='menu_item' href='../../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php' target='_parent'>Produtos</a></li>
                            <li><a class='menu_item' href='../../BancoV6/Cadastros/Devs/devs.php'>Devs</a></li>
                            <li><a class='menu_item' href='../../BancoV6/Cadastros/patrocinadores/patro.php'>Patrocinadores</a></li>
                     </ul>
                     <div class='logo'>
                            <img class='logoimg' src='../../BancoV6/imagem/logopreta.png'>
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
                                          <a href='../../BancoV6/login/login_true.php'><i class='fa-thin fa-user fa'></i></a>
                                   <?php endif;
                                   if ($_SESSION["usuariologado"] == "") : ?>
                                          <a href='../../BancoV6/login/login.php'><i class='fa-thin fa-user fa'></i></a>
                                   <?php endif; ?>
                            </div>
                     </div>
                     <div class='carrinho'>
                            <div class='carrinho_icone'>
                                   <a href='../../BancoV6/Cadastros/carrinho/carrinho_front.php'><i class='fa-thin fa-cart-shopping fa'></i></a>
                            </div>
                     </div>
              </div>
       <?php endif;
       $id_usuario = $_SESSION['id'];
       include "login_true_info.php"; ?>
       <div class="maealog">
              <h1 class="hualog">Perfil</h1>
              <div class="perfil">
                     <div class="imgperfis">
                            <img class="imgperfil" src="../../BancoV6/imagem/perfil.jpeg">
                            <div class="btnsperf">
                                   <div class="cellc cellAc"> <a href="./logoff_back.php">Sair</a></div>
                                   |
                                   <div class="cellc cellAc"><a href="../../BancoV6/index.php">Home</a></div>
                            </div>
                     </div>
                     <!-- Formulário (após as informações serem carregadas) -->
                     <!-- <img src="../imagem/instabox.jpg"> -->
                     <form action="login_true_back.php" method="post">
                     <div class="cepsf">
                            <div class="ceps1">
                                   <label>Código</label>
                                   <input type="text" name="id_usuario" value="<?php echo $linha['id_usuario']; ?>">

                                   <label>Nome</label>
                                   <input type="text" name="nome" value="<?php echo $linha['nome']; ?>">

                                   <label>Email</label>
                                   <input type="text" name="email" value="<?php echo $linha['email']; ?>">
                            </div>
                            <div class="ceps2">
                                   <label>Senha</label>
                                   <input type="text" name="senha" value="<?php echo $linha['senha']; ?>">

                                   <label>Telefone</label>
                                   <input type="text" name="telefone" value="<?php echo $linha['telefone']; ?>">
                            </div>
              </div>
              <!-- <div class="btnfing"> -->
                     <!-- <div class="btnfin"> -->
                            <input class="btnconpf" type="submit" value="Alterar Dados">
                     <!-- </div> -->
                     </form>
              </div>
       </div>
       
</body>

</html>