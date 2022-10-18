<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Formulário de Cadastro de Produtos - Tabela Produtos CRUD</title>   
    <link rel="stylesheet" href="../../../../BancoV6/css/cabecalho/style.css">

</head>
<body>

<div class='cabecalho'>
    <div class='hamburguer_menu'>
        <input id='menu_to' type='checkbox'/>
        <label class ='menu_btn' for='menu_to'>
            <span></span>
        </label>
        <ul class='menu_box'>
            <li><a class='menu_item' href='../../../../BancoV6/index.php'>Home</a></a></li>
            <li><a class='menu_item' href='../../../../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php' target='_parent'>Produtos</a></a></li>
            <li><a class='menu_item' href='../../../../BancoV6/Cadastros/Usuarios/cadastros/cad_pesq_usuarios_front.php' target='_parent'>Usuários</a></a></li>
            <li><a class='menu_item' href='#'>Devs</a></a></li>
            <li><a class='menu_item' href='#'>Estatísticas</a></a></li> 
       </ul>
    </div>
</div>
    <h1>Cadastro de Usuarios</h1>

    <form action="cad_novo_usuarios_back.php" method="post">
        <label>
            <strong>Nome:</strong><br />    
            <input type="text" name="nome" /><br />
            <br />
        </label>
        <label>
            <strong>Email:</strong><br />
            <input type="text" name="email" /><br />
            <br />
        </label>
        <label>
            <strong>Senha:</strong><br />
            <input type="text" name="senha"  /><br />
            <br />
        </label>
        <label>
            <strong>Telefone:</strong><br />
            <input type="text" name="telefone" /><br />
            <br />
        </label>
        <input type="submit" name="button" id="button" value="Enviar" />
        <a href='cad_pesq_usuarios_front.php'>Voltar</a><br><br>
    </form> 
</body>
</html>