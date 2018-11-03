<?php
// Criando Funções

function exibirNome ($nome){
    echo "Meu nome é $nome.";
}

exibirNome("Roodney Moraes");
echo "<hr>";


function calcularMedia ($nome, $n1, $n2, $n3, $n4){
    $media = ($n1 + $n2 + $n3 + $n4) /4;
    if($media >= 7){
        echo "O aluno <b>$nome</b> foi <i>Aprovado</i> com a média <b>$media</b>.";
    }else{
        echo "O aluno <b>$nome</b> foi <i>Aprovado</i> com a média <b>$media</b>.";
    }      
}

calcularMedia("Roodney Moraes", 5, 7, 9, 10);
echo "<hr>";
calcularMedia("Sabrina Prado", 8.5, 3.2, 6.1, 5.2);
?>