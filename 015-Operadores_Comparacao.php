<?php
//Operadores de Comparação
/*

(==) - Igualdade
(!=) - Negação
(===) - Igualdade de Identidade
(!==) - Negação de Identidade
(<>) - Diferente
(<) - Maior
(>) - Menor
(<=) - Maior Igual
(>=) - Menor Igual
(<=>) - Spaceship(Nave Espacial) retorna (-1) quando o primeiro valor for menor que o segundo, (0) quando os dois valores forem iguais
e (1) quando o primeiro valor for maior que o segundo

*/

if(5 <= 10){
    echo "Verdadeiro";
}else{
    echo "Falso";
}

echo "<hr>";
var_dump(20<=>30);
var_dump(30<=>30);
var_dump(40<=>30);
echo "<hr>";


echo "<br>";
echo "Olhe o código fonte para entender melhor!";


?>