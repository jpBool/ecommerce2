<link rel="stylesheet" href="../../../../BancoV4/css/cabecalho/style.css">

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
<!-- Recuperando as informações do produto -->
<?php
       $id_usuario = $_GET["id_usuario"];
       include "cad_getinfo_usuarios_back.php"; 
?>

<!-- Formulário (após as informações serem carregadas) -->
<form action="cad_altera_usuarios_back.php" method="post">

    <input type="text" name="id_usuario" 
           value="<?php echo $linha['id_usuario']; ?>" >
    <br><br>Nome
    <input type="text" name="nome" 
           value="<?php echo $linha['nome']; ?>" >      
    <br><br>Email
    <input type="text" name="email" 
           value="<?php echo $linha['email']; ?>" >
    <br><br>Senha
    <input type="text" name="senha" 
           value="<?php echo $linha['senha']; ?>" >
    <br><br>Telefone
    <input type="text" name="telefone" 
           value="<?php echo $linha['telefone']; ?>" >

     <br><br>
    <input type="submit" value="Gravar">
    <input type="reset" value="Voltar" onclick="history.back()">
</form>