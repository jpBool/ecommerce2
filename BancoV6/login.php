<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../BancoV6/css/cabecalho/style.css">
    <script src="https://kit.fontawesome.com/0dcacea947.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body>
    <div class='cabecalho'>
        <input id='menu_to' type='checkbox' />
        <label class='menu_btn' for='menu_to'>
            <span></span>
        </label>
        <ul class='menu_box'>
            <li><a class='menu_item' href='../BancoV6/index.php'>Home</a></li>
            <li><a class='menu_item' href='../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php' target='_parent'>Produtos</a></li>
            <li><a class='menu_item' href='#'>Devs</a></li>
            <li><a class='menu_item' href='#'>Estatísticas</a></li>
            <li><a class='menu_item' href='#'>Patrocinadores</a></li>
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
                <a href="./login.html"><i class="fa-thin fa-user fa"></i></a>
            </div>
        </div>
        <div class='carrinho'>
            <div class='carrinho_icone'>
                <a href="#"> <i class="fa-thin fa-cart-shopping fa"></i></a>
            </div>
        </div>
    </div>
    <div class="main-login">
        <div class="left-login">
            <h1>Faça Login<br>E compre conosco!!!</h1>
            <div class="left-login-image"><img src="../BancoV6/imagem/logoembranco.png" alt="">
            </div>
        </div>


        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" placeholder="Usuário">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>
                <div class="btn-login"><button>Login</button></div>
            
                <div class="criacao">
                    <label>Não possui uma conta?</label>
                    <a href="../BancoV6/Cadastros/Usuarios/cadastros/cad_pesq_usuarios_front.php"> Crie aqui</a>
                </div>
            </div>
        </div>

    </div>
</body>

</html>