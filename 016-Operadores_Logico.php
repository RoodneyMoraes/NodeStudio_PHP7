<?php
//Operadores Lógicos
//Nos permitem fazer comparações entre expressões
// e (&& - and)
// ou (|| - or)
// ou exclusivo (xor)
// negação (!) 

$idade = 23;
$nome  = "Roodney";

if(!($idade == 25) and ($nome == "Roodney")){
    echo "É verdadeiro!";
}else{
    echo "É falso!";
}

echo "<br><br><br>";
echo "Olhe o código fonte para entender melhor!";

?>