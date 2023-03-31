<?php
    include "conexao.php"; 

    /* seleciona todos os itens do carrinho do usuário */
    $sql="SELECT c.*,
                 p.preco,
                 c.qtde * p.preco as subtotal,
                 p.descricao,
                 p.qtd as estoque
            FROM pic_carrinho c
           inner join pic_produtos p
              on c.cod_produto = p.id_produto
           WHERE c.cod_usuario = $codusuario
           ORDER BY p.descricao;";

    $resultado= pg_query($conecta, $sql);
    $qtde=pg_num_rows($resultado);

    $resultado_lista = null;

    if ($qtde > 0)
    {
        $resultado_lista=pg_fetch_all($resultado);
    }

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);

    session_start();
    $_SESSION['produtos'] = $resultado_lista;
    
?>