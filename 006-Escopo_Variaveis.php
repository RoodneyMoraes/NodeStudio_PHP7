<?php
//  ESCOPO GLOBAL
$nome = "Roodney Moraes";
$a = 1;
$b = 3;
$c = 7;

function exibeNome(){
    global $nome;
    echo $nome;
}

exibeNome();
echo "<hr>";
///////////////////////////

function exibeCidade(){
    //ESCOPO LOCAL
    global $cidade;
    $cidade = "Rio de Janeiro";
}

exibeCidade();
echo $cidade;
echo "<hr>";
///////////////////////////

function somar (){
    //array especial globals
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

somar();

?>