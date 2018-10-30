<?php 

$mediaFinal = 9.5;
echo "Sua média é $mediaFinal e ";

// Estruta Condicional verificando a média
if($mediaFinal < 5){
    echo "sua nota foi abaixo de 5";
}elseif($mediaFinal >= 5 && $mediaFinal <= 7){
    echo "sua nota está entre 5 e 7";
}else{
    echo "sua nota é acima de 7";
}

echo "<br>";

//Operador Ternario
echo ($mediaFinal > 7)?"Com essa média o aluno foi Aprovado!":"Com essa média o aluno foi Reprovado!";


?>