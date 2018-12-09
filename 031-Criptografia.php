<?php

    $senha = 'olamundo';

    //Criptografia mão dupla | codificando
    $novaSenha = base64_encode($senha);
    echo "Base64: ". $novaSenha;
    echo "<br>";
    //Criptografia mão dupla | decodificando
    echo "Sua senha é: ". base64_decode($novaSenha);

    echo "<hr>";

    //Criptografia mão unica | codificando
    echo "Md5: ". md5($senha);
    echo "<br>";
    echo "Sha1: ". sha1($senha);

    // SITE PARA ACHAR SENHA DE HASH
    // https://crackstation.net/
?>