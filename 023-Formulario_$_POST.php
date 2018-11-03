<?php
// Superglobais $_POST
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário POST</title>
</head>
<body>
    <form action="23-formularios_POST/23_dados.php" method="POST">
        Nome: <input type="text" name="nome">
        <br>
        Email: <input type="email" name="email">
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>