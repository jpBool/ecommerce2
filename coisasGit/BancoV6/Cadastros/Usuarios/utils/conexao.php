<?php

    $stringdeconexao = "host=pgsql.projetoscti.com.br
                        port=5432
                        dbname=projetoscti4
                        user=projetoscti4
                        password=cti123";

    $conecta = pg_connect($stringdeconexao);
    
    if (!$conecta) {
        echo '<script language="javascript">';
        echo "alert('Não foi possível estabelecer conexão com o banco de dados!')";
        echo '</script>';	
        
        exit;
    }
    // else
    // {
    //     echo '<script language="javascript">';
    //     echo "alert('Conexão estabelecida com o banco de dados!')";
    //     echo '</script>';	
    // }
?>