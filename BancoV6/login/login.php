<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../BancoV6/css/cabecalho/style.css">
    <script src="https://kit.fontawesome.com/0dcacea947.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../../BancoV6/imagem/logopreta.png" />
    <title>Login</title>
</head>

<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Faça Login<br>E compre conosco!!!</h1>
            <div class="left-login-image"><img src="../../BancoV6/imagem/logoembranco.png">
            </div>
        </div>

       
            <div class="right-login">
                
                    <div class="card-login">
                        <h1>L O G I N</h1>
                        <form method="post" action="login_back.php">
                            <div class="textfield">
                                <label for="email">Email</label>
                                <input type="text" name="email" placeholder="Email" id="email">
                            </div>
                            <div class="textfield">
                                <label for="senha">Senha</label>
                                <input type="password" name="senha" placeholder="Senha" id="senha">
                            </div>
                            <div class="btn-login">
                                <input type="submit" value="logar">
                            </div>
                        
                            <div class="criacao">
                                <label>Não possui uma conta?</label>
                                <a href="../Cadastros/Usuarios/cadastros/cad_novo_usuarios_front.php"> Crie aqui</a>
                            </div>
                        <form>
                    </div>
                
            </div>
            

    </div>
</body>

</html>