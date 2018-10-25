<?php
// Constantes
define("NOME", "Roodney Moraes");
define("IDADE", 24);
define("ALTURA", 1.89);
define("CASADO", true);

var_dump(NOME);
echo NOME;
echo "<hr>";

var_dump(IDADE);
echo IDADE;
echo "<hr>";

var_dump(ALTURA);
echo ALTURA;
echo "<hr>";

var_dump(CASADO);
echo CASADO;
echo "<hr>";

echo "Meu nome é ".NOME. " e minha idade é ".IDADE. " e minha altura é ".ALTURA." e eu sou ".CASADO. " (1 é referente a verdadeiro e 0 é falso).";
echo "<hr>";

// array constantes
define("TIMES", ['Vasco', 'Flamengo', 'Santos']);
var_dump(TIMES);
echo TIMES [2];
echo "<hr>";

//função retornando um define
function exibeNome(){
    echo NOME;
}

exibeNome();

?>