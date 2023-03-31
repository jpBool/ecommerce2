<?php
    session_start();
    // script foi chamado de index.php
    include "conexao.php"; 
  

    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $senhacripto = MD5($_POST["senha"]);
    $_SESSION["isadm"] = false;
    $sql = "select * from pic_usuarios where email = '$email' and senha = '$senha' ";
    $senha = md5($senha);

    $res = pg_query($conecta, $sql);
    if (pg_num_rows($res) > 0)
    {
        
        $linha = pg_fetch_array($res);
        $_SESSION["usuariologado"] = $linha;
        $_SESSION["isadm"] = $linha['adm'];
        $_SESSION["id"]=$linha['id_usuario'];
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../index.php'>";
    }
    else
    {
        echo '<script language="javascript">';
        echo "alert('Usuário ou senha inválidos!')";
        echo '</script>';	

        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=login.php'>";
    }
?>