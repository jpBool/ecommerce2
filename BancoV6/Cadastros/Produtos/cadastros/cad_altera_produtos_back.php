<?php
    include "../utils/conexao.php"; 

    //dados enviados do script altera_prod_lista.php
    $id_produto=$_POST["id_produto"];
    $nome=$_POST['nome'];
    $descricao=$_POST["descricao"];
    $qtd=$_POST["qtd"];
    $preco=$_POST["preco"];
    $codigovisual=$_POST["codigovisual"];
    $custo=$_POST["custo"];
    $margem_lucro=$_POST["margem_lucro"];

    $sql="UPDATE pic_produtos
             SET nome = '$nome',
                 descricao = '$descricao',
                 qtd = '$qtd',
                 preco = '$preco', 
                 codigovisual = '$codigovisual',
                 margem_lucro = '$margem_lucro'
           WHERE id_produto = '$id_produto';";
    
    $resultado=pg_query($conecta,$sql);
    $qtde=pg_affected_rows($resultado);

    if ($qtde > 0)
        echo "<script type='text/javascript'>alert('Gravação OK !!!')</script>";
    else	
        echo "<script type='text/javascript'>alert('Erro na Gravação !!!')</script>";

    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=cad_pesq_produtos_front.php'>";

    // Fechando conexão com o Banco de Dados
    pg_close($conecta);
?>