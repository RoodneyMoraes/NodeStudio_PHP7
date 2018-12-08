<?php
    // CONEXÃO COM BANCO DE DADOS
    $servername = "127.0.0.1";
    $username = "root";
    $password = "root";
    $db_name = "sistema_login";

    $connect = mysqli_connect($servername, $username, $password, $db_name);

    if(mysqli_connect_error()){
        echo "Falha na conexão ".mysqli_conenect_error();
    }else{
        // echo "Sistema conectado!";
    }


?>