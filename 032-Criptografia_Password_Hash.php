<?php

    $senha = '123456';
    $senha_db = '$2y$10$jtXm5qvUP5cysfemjiT9c.iRsiaJk5A4erkplTl7Y/ZNpBoMSAqD6';


    $senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
    // echo $senhaSegura;

    // SE FOR CADASTRA EM UM BANCO DE DADOS DEIXE (255) CARACTERES

    // VEREFICANDO  SE A SENHA DO USUÁRIO ESTÁ IGUAL A DO BANCO
    if(password_verify($senha, $senha_db)){
        echo "Senha Válida!";
    }else{
        echo "Senha Inválida!";
    }


?>