<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Pesquisa de Usuários</title>
        <link rel="stylesheet" href="../../../../BancoV6/css/cabecalho/style.css">
    </head>
<body>

<style>
    .menuTop
    {
        overflow: hidden;
        background-color: #333;
    }
    .menuTop li
    {
        display:inline-flex;
        padding-right:3px;
        background-color: rgb(94, 94, 94);
       
    }
    .menuTop a
    {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }
    body
    {
    background-color: rgb(226, 226, 226);
    }
    .table {width:1500px; display:grid;}
    .row { display:block;}
    .cell {
        border-width: medium;
        border-style: solid;
        display:inline-block;
        padding: 1px 3px;
        margin-bottom: .2%;
        background-color: rgb(144, 221, 217);
        font-size: 10pt;
    }
    .cellNome {width:100px;}
    .cellHeader {text-align: center !important;}
    .cellCodigo {width:100px; }
    .cellEmail {width:300px;}
    .cellSenha {width:60px;}
    .cellTelefone {width:100px;}
    .cellAcoes {width:100px;}
</style>

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
<div class="menuTop">
        <ul>
            <li>
                <a href='cad_novo_usuarios_front.php'>Novo Usuário!</a>
            </li>  
            <li>
                <a href="../../../index.php">+ Voltar</a>
            </li>
            <li>
                <a href="#">+ Pesquisar</a>
            </li>
        </ul>  
    </div><br>
    

<?php
    include "cad_pesq_usuarios_back.php";

    if ($qtde == 0) {
        echo "Não foi encontrado nenhum produto !!!<br><br>";
        return;
    }

    // Começar tabela e criar o cabeçalho
    echo "
    <div class='table'>
        <div class='row'>
            <div class='cell cellCodigo cellHeader'>
                Cód. Usuário
            </div>
            <div class='cell cellNome cellHeader'>
                Nome
            </div>
            <div class='cell cellEmail cellHeader'>
                Email
            </div>
            <div class='cell cellSenha cellHeader'>
                Senha
            </div>
            <div class='cell cellTelefone cellHeader'>
                Telefone
            </div>
            <div class='cell cellAcoes'>
                &nbsp;
            </div>     
        </div>";

        // Criar linhas com os dados dos produtos
        foreach ($resultado_lista as $linha)
        {
            echo "
            <div class='row'>
                <div class='cell cellCodigo'>
                    ".$linha['id_usuario']."
                </div>
                <div class='cell cellNome'>
                    ".$linha['nome']."
                </div>
                <div class='cell cellEmail'>
                    ".$linha['email']."
                </div>
                <div class='cell cellSenha'>
                    ".$linha['senha']."
                </div>
                <div class='cell cellTelefone'>
                    ".$linha['telefone']."
                </div>
                <div class='cell cellAcoes'>
                    <a href='cad_altera_usuarios_front.php?id_usuario=".$linha['id_usuario']."'> Alterar</a>&nbsp;
                   
                </div>
            </div> "; 
        } 
    // Fechando a tag da tabela
    echo "</div>";
?>    
</body>
</html>