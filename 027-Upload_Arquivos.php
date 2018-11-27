<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload de Arquivos</title>
</head>
<body>

    <?php
        if(isset($_POST['enviar-formulario'])){
            $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
            $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
            
            if(in_array($extensao, $formatosPermitidos)){
                $pasta = "27-arquivos/";
                $temporario = $_FILES['arquivo']['tmp_name'];
                $novoNome = uniqid().".$extensao";

                if(move_uploaded_file($temporario, $pasta.$novoNome)){
                    $mensagem = "Upload feito com sucesso!";
                }else{
                    $mensagem = "Erro, não foi possivel fazer o upload!";
                }

            }else{
                $mensagem = "Formato Inválido!";
            }
            echo $mensagem;
        }

    
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo">
        <br>
        <input type="submit" name="enviar-formulario">
    </form>
</body>
</html>