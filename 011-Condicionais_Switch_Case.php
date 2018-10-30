<?php

//Swicth Case
$cor = "Amarelo";
echo "Cor = $cor";

echo "<hr>";

switch($cor){
    case "Azul":
        echo "Sua cor preferida é Azul!";
    break;
    
    case "Vermelha":
        echo "Sua cor preferida é Vermelho!";
    break;

    case "Verde":
        echo "Sua cor preferida é Verde!";
    break;
    
    default:
        echo "Sua cor preferida não é Azul, Vermelho ou Verde.";
}




?>
