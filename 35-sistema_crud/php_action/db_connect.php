<?php
    // CONEXÃO COM BANCO DE DADOS
    $servername = "127.0.0.1";
    $username = "root";
    $password = "root";
    $db_name = "crud";

    $connect = mysqli_connect($servername, $username, $password, $db_name);
    mysqli_set_charset($connect, "utf8");

    if(mysqli_connect_error()){
        echo "Falha na conexão ".mysqli_conenect_error();
    }else{
        // echo "Sistema conectado!";
    }


?>