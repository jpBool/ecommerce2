<?php
    include "../utils/conexao.php"; 
    
    // Recuperação de dados
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $telefone=$_POST['telefone'];
   

    // Inserção
    $sql="INSERT INTO pic_usuarios
          (id_usuario, nome, email, senha, telefone)
          VALUES (
            DEFAULT,
            '$nome',
            '$email', 
            '$senha', 
            '$telefone');";
    
    // Execução
    $resultado=pg_query($conecta,$sql);
    $linhas=pg_affected_rows($resultado);

    if ($linhas > 0)
    {
        echo '<script language="javascript">';
        echo "alert('Produto salvo com sucesso!')";
        echo '</script>';	

        header("Location: cad_novo_usuarios_front.php");
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