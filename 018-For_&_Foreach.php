<?php
// For & Foreach

for ($contador = 0; $contador <= 10; $contador++){
    echo "5 X $contador = ".($contador*5). "<br>";
}

echo "<hr>";


$tabuada = array(1,2,3,4,5,6,7,8,9,10);

foreach($tabuada as $indice => $valor){
    echo $indice. "x". $valor. "<br>";
}

?>