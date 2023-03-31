<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Formulário de Cadastro de Produtos - Tabela Produtos CRUD</title>
    <link rel="stylesheet" href="../../../../BancoV6/css\cabecalho/style.css">
    <script src="https://kit.fontawesome.com/0dcacea947.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../../../../BancoV6/imagem/logopreta.png" />

</head>

<body class="bodyu">
    <div class="maeu">
        <div class="azul">
            <div class="azul-text">
                <h2>Bem-vindo ao site PicRoll !</h2>
                <p>Acesse sua conta agora mesmo.</p>
            </div>

        </div>

        <div class="branco">
            <h2>Crie sua conta</h2>

            <form class="dadost" action="cad_novo_usuarios_back.php" method="post" class="form">


                <div class="dados">
                    <label>Nome</label>
                    <input type="text" name="nome" placeholder="Nome">
                </div>
                <div class="dados">
                    <label>E-mail:</label>
                    <input type="text" name="email" placeholder="E-mail">
                </div>
                <div class="dados">
                    <label>Senha</label>
                    <input type="text" name="senha" placeholder="Senha">
                </div>
                <div class="dados">
                    <label>Telefone:</label>
                    <input type="text" name="telefone" placeholder="Telefone">
                </div>

                <div class="cad">
                    <input type="submit" class="cadbtn" value="Cadastrar">
                </div>

            </form>
            <br>
            <div class="criacaou">
                <label>Já possui uma conta?</label>
                <a href="../../../../BancoV6/login/login.php"> Faça Login</a>

            </div>
        </div>
    </div>
</body>

</html>