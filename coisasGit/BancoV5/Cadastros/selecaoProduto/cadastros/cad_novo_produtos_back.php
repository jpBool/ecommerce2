<?php
    include "../utils/conexao.php"; 
    
    // Recuperação de dados
    $nome=$_POST['nome'];
    $descricao=$_POST['descricao'];
    $qtd=$_POST['qtd'];
    $preco=$_POST['preco'];
    $data='1171502725';
    $codigovisual=$_POST['codigovisual'];
    $margem_lucro=$_POST['margem_lucro'];
    $icms=$_POST['icms'];
    $campo_imagem=$_POST['campo_imagem'];
    $excluido='n';

    // Inserção
    $sql="INSERT INTO pic_produtos
          (id_produto, nome, descricao, qtd, preco, codigovisual, margem_lucro, excluido)
          VALUES (
            DEFAULT,
            '$nome',
            '$descricao', 
            $qtd, 
            $preco,
            '$codigovisual',
            $margem_lucro,    
            '$excluido');";
    
    // Execução
    $resultado=pg_query($conecta,$sql);
    $linhas=pg_affected_rows($resultado);

    if ($linhas > 0)
    {
        echo '<script language="javascript">';
        echo "alert('Produto salvo com sucesso!')";
        echo '</script>';	

        header("Location: cad_novo_produtos_front.php");
    }   
    else
    {
        echo '<script language="javascript">';
        echo "alert('Erro na gravação do produto!')";
        echo '</script>';	
    }

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>  