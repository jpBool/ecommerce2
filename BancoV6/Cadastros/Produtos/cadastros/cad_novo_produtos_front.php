<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Formulário de Cadastro de Produtos - Tabela Produtos CRUD</title>
    <link rel="stylesheet" href="../../../../BancoV6/css\cabecalho/style.css">
        <script src="https://kit.fontawesome.com/0dcacea947.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../../../../BancoV6/imagem/logopreta.png" />
</head>
<body>




<div class='cabecalho'>
            <input id='menu_to' type='checkbox' />
            <label class='menu_btn' for='menu_to'>
                <span></span>
            </label>
            <ul class='menu_box'>
                <li><a class='menu_item' href='../../../../BancoV6/index.php'>Home</a></li>
                <li><a class='menu_item' href='../../../../BancoV6/Cadastros/selecaoProduto/cadastros/cad_pesq_produtos_front.php' target='_parent'>Produtos</a></li>
                <li><a class='menu_item' href='../../../../BancoV6/Cadastros/Devs/devs.php'>Devs</a></li>
                <li><a class='menu_item' href='#'>Estatísticas</a></li>
                <li><a class='menu_item' href='#'>Patrocinadores</a></li>
            </ul>
            <div class='logo'>
                <img class='logoimg' src="../../../../BancoV6/imagem/logopreta.png">
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
                    <a href="../../../login.html"><i class="fa-thin fa-user fa"></i></a>
                </div>
            </div>
            <div class='carrinho'>
                <div class='carrinho_icone'>
                    <a href="#"> <i class="fa-thin fa-cart-shopping fa"></i></a>
                </div>
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