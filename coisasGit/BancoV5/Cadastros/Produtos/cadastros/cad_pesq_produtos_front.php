<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Pesquisa de Produtos</title>
        <link rel="stylesheet" href="../../../../BancoV4/css/cabecalho/style.css">
    </head>
<body>

<style>
    .body
    {
        height: 10em;
    display: inline-flex;
    align-items: center;
    justify-content: center;
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
    .cellDescricao {width:300px;}
    .cellQtd {width:60px;}
    .cellPrecoHeader {width:100px;}
    .cellPreco {width:60px; text-align:center;}
    .cellAcoes {width:100px;}
    .cellExcluido {width:60px;}
    .cellData{width:60px;}
    .cellCodigoVisual{width:100px;}
    .cellLucro{width:60px;}
    .cellIcms{width:60px;}
    .cellImagem{width:60px;}
</style>


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

<a href='cad_novo_produtos_front.php'>+ Novo Produto</a><br><br>
<a href="../../../index.php">+ Voltar</a>


<?php
    include "cad_pesq_produtos_back.php";

    if ($qtde == 0) {
        echo "Não foi encontrado nenhum produto !!!<br><br>";
        return;
    }

    // Começar tabela e criar o cabeçalho
    echo "
    <div class='table'>
        <div class='row'>
            <div class='cell cellCodigo cellHeader'>
                Cód. Produto
            </div>
            <div class='cell cellNome cellHeader'>
                Nome
            </div>
            <div class='cell cellDescricao cellHeader'>
                Descrição
            </div>
            <div class='cell cellQtd cellHeader'>
                Quantidade
            </div>
            <div class='cell cellPreco cellHeader'>
                Preço
            </div>
            <div class='cell cellExcluido cellHeader'>
                Excluido
            </div>
            <div class='cell cellData cellHeader'>
                Data/Hora
            </div>
            <div class='cell cellCodigoVisual cellHeader'>
                CodigoVisual
            </div>
            <div class='cell cellLucro cellHeader'>
                Lucro
            </div>
            <div class='cell cellIcms cellHeader'>
                Icms
            </div>
            <div class='cell cellImagem cellHeader'>
                Imagem
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
                    ".$linha['id_produto']."
                </div>
                <div class='cell cellNome'>
                    ".$linha['nome']."
                </div>
                <div class='cell cellDescricao'>
                    ".$linha['descricao']."
                </div>
                <div class='cell cellQtd'>
                    ".$linha['qtd']."
                </div>
                <div class='cell cellPreco'>
                    ".$linha['preco']."
                </div>
                <div class='cell cellExcluido'>
                    ".$linha['excluido']."
                </div>
                <div class='cell cellData'>
                    ".$linha['datahora_exlusao']."
                </div>
                <div class='cell cellCodigoVisual'>
                    ".$linha['codigovisual']."
                </div>
                <div class='cell cellLucro'>
                    ".$linha['margem_lucro']."
                </div>
                <div class='cell cellIcms'>
                    ".$linha['icms']."
                </div>
                <div class='cell cellImagem'>
                    ".$linha['campo_imagem']."
                </div>
                <div class='cell cellAcoes'>
                    <a href='cad_altera_produtos_front.php?id_produto=".$linha['id_produto']."'> Alterar</a>&nbsp;
                    <a href='cad_exclui_produtos_front.php?id_produto=".$linha['id_produto']."'> Excluir</a>&nbsp;
                </div>
            </div> "; 
        } 
    // Fechando a tag da tabela
    echo "</div>";
?>    
</body>
</html>