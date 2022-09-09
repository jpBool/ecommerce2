<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Formulário de Cadastro de Produtos - Tabela Produtos CRUD</title>
    <link rel="stylesheet" href="../../../../BancoV4/css/cabecalho/style.css">
</head>
<body>

<div class='cabecalho'>
    <div class='hamburguer_menu'>
        <input id='menu_to' type='checkbox'/>
        <label class ='menu_btn' for='menu_to'>
            <span></span>
        </label>
        <ul class='menu_box'>
            <li><a class='menu_item' href='../../../../BancoV4/index.php'>Home</a></a></li>
            <li><a class='menu_item' href='../../../../BancoV4/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php' target='_parent'>Produtos</a></a></li>
            <li><a class='menu_item' href='../../../../BancoV4/Cadastros/Usuarios/cadastros/cad_pesq_usuarios_front.php' target='_parent'>Usuários</a></a></li>
            <li><a class='menu_item' href='#'>Devs</a></a></li>
            <li><a class='menu_item' href='#'>Estatísticas</a></a></li> 
       </ul>
    </div>
</div>
    <h1>Cadastro de Produtos</h1>

    <form action="cad_novo_produtos_back.php" method="post">
        <label>
            <strong>Nome:</strong><br />    
            <input type="text" name="nome" /><br />
            <br />
        </label>
        <label>
            <strong>Descrição:</strong><br />
            <input type="text" name="descricao" /><br />
            <br />
        </label>
        <label>
            <strong>Quantidade:</strong><br />
            <input type="text" name="qtd"  /><br />
            <br />
        </label>
        <label>
            <strong>Preço:</strong><br />
            <input type="text" name="preco" /><br />
            <br />
        </label>
        <label>
            <strong>Data:</strong><br />
            <input type="text" name="datahora_exlusao" /><br />
            <br />
        </label>
        <label>
            <strong>Código Visual:</strong><br />
            <input type="text" name="codigovisual" /><br />
            <br />
        </label>
        <label>
            <strong>Margem de lucro:</strong><br />
            <input type="text" name="margem_lucro" /><br />
            <br />
        </label>
        <label>
            <strong>ICMS:</strong><br />
            <input type="text" name="icms" /><br />
            <br />
        </label>
        <label>
            <strong>Campo Imagem:</strong><br />
            <input type="text" name="campo_imagem" /><br />
            <br />
        </label>
        <input type="submit" name="button" id="button" value="Enviar" />
        <a href='cad_pesq_produtos_front.php'>Voltar</a><br><br>
    </form> 
</body>
</html>