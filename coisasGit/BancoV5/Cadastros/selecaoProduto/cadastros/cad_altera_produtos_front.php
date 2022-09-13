<link rel="stylesheet" href="../../../../BancoV6/css/cabecalho/style.css">

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
<!-- Recuperando as informações do produto -->
<?php
       $id_produto = $_GET["id_produto"];
       include "cad_getinfo_produto_back.php"; 
?>

<!-- Formulário (após as informações serem carregadas) -->
<form action="#" method="post">
    <img src='../img/caixa.png' width='150px'> <br><br>
    <h1><?php echo $linha['nome']; ?> </h1>
    Código do produto : <?php echo $linha['id_produto']; ?>
    <br><br>Descrição : <?php echo $linha['descricao']; ?>
    <br><br>Quantidade : <?php echo $linha['qtd']; ?>
    <br><br>Preço : <?php echo $linha['preco']; ?>
    <br><br>Código Visual : <?php echo $linha['codigovisual']; ?>
    <br><br>Custo : <?php echo $linha['custo']; ?>
    <br><br>Margem lucro : <?php echo $linha['margem_lucro']; ?>

     <br><br>
    <input type="submit" value="Comprar">
    <input type="reset" value="Voltar" onclick="history.back()">
</form>