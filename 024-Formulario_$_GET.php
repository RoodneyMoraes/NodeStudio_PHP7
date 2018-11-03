<?php
// Superglobais $_GET
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário GET</title>
</head>
<body>
    <form action="24-formularios_GET/24_dados.php" method="GET">
        Nome: <input type="text" name="nome">
        <br>
        Email: <input type="email" name="email">
        <br>
        <button type="submit">Enviar</button>
    </form>
    <a href="24-formularios_GET/24_dados.php?idade=23&cidade=Santos">Enviar dados atraves de link</a>
</body>
</html>