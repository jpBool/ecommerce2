<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Produtos</title>

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
                    <a href="../../../login.php"><i class="fa-thin fa-user fa"></i></a>
                </div>
            </div>
            <div class='carrinho'>
                <div class='carrinho_icone'>
                    <a href="#"> <i class="fa-thin fa-cart-shopping fa"></i></a>
                </div>
            </div>
        </div>
<!-- Recuperando as informações do produto -->
<?php
       $id_produto = $_GET["id_produto"];
       include "cad_getinfo_produto_back.php"; 
?>

<!-- Formulário (após as informações serem carregadas) -->
<form action="cad_altera_produtos_back.php" method="post">
    <h1>Alteração de Produtos</h1>
    Código do produto
    <input type="text" name="id_produto" 
           value="<?php echo $linha['id_produto']; ?>" 
           readonly>
    <br><br>Nome
    <input type="text" name="nome" 
           value="<?php echo $linha['nome']; ?>" >      
    <br><br>Descrição
    <input type="text" name="descricao" 
           value="<?php echo $linha['descricao']; ?>" >
    <br><br>Quantidade
    <input type="text" name="qtd" 
           value="<?php echo $linha['qtd']; ?>" >
    <br><br>Preço
    <input type="text" name="preco" 
           value="<?php echo $linha['preco']; ?>" >
    <br><br>Código Visual
    <input type="text" name="codigovisual" 
           value="<?php echo $linha['codigovisual']; ?>" >
    <br><br>Custo
    <input type="text" name="custo" 
           value="<?php echo $linha['custo']; ?>" >
    <br><br>Margem lucro
    <input type="text" name="margem_lucro" 
           value="<?php echo $linha['margem_lucro']; ?>" >

     <br><br>
    <input type="submit" value="Gravar">
    <input type="reset" value="Voltar" onclick="history.back()">
</form>
</body>
</html>