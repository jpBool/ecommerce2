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
<?php
       $id_produto = $_GET["id_usuario"];
       include "cad_getinfo_usuarios_back.php"; 
?>

<!-- Formulário (após as informações serem carregadas) -->
<form action="cad_exclui_usuarios_back.php" method="post">
    <h1>Confirmação: Exclusão de Produtos</h1>
    
    Código do Usuário
    <input type="text" name="id_usuario" 
           value="<?php echo $linha['id_usuario']; ?>" 
           readonly>
    <br><br>Nome
    <input type="text" name="nome" 
           value="<?php echo $linha['nome']; ?>" 
           readonly>      
    <br><br>Email
    <input type="text" name="email" 
           value="<?php echo $linha['email']; ?>" 
           readonly>
    <br><br>Senha
    <input type="text" name="senha" 
           value="<?php echo $linha['senha']; ?>" 
           readonly>
    <br><br>Telefone
    <input type="text" name="telefone" 
           value="<?php echo $linha['telefone']; ?>" 
           readonly>

    <br><br>
    <input type="submit" value="Confirma exclusão">
    <input type="button" value="Editar" onclick="location.href='cad_altera_usuarios_front.php?id_usuario=<?php echo $id_usuario ?>';">
    <input type="button" value="Voltar" onclick="location.href='cad_pesq_usuarios_front.php';">
</form>