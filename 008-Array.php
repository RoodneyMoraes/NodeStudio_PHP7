<?php
// Arrays Númericos
$carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
// adicionar item no array e numerando cada item
$carros[] = "Amarok";
$carros[10] = "Camaro";

print_r($carros);
var_dump($carros);
echo $carros[3];
echo "<br>";
echo "<hr>";


// Outra maneira de montar um Array 
$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";

print_r($motos);
var_dump($motos);
echo $motos[0];
echo "<br>";
echo "<hr>";


// Outra maneira de montar um Array 
$clientes = ["Roodney", "Sabrina", "Lucimara", "Gabriel"];

print_r($clientes);
var_dump($clientes);
echo $clientes[1];
echo "<br>";
echo "<hr>";


// Função Count em carros
$totalCarros = count($carros);
var_dump($totalCarros);
echo "O total de carros armazenado no array é <b>$totalCarros</b> segue abaixo os valores desse array:";
echo "<br><br>";

// Foreach dos carros
foreach($carros as $valor){
    echo $valor. "<br>";
}
echo "<hr>";



// Função Count em motos
$totalMotos = count($motos);
var_dump($totalMotos);
echo "O total de motos armazenado no array é <b>$totalMotos</b> segue abaixo os valores desse array:";
echo "<br><br>";

// Foreach das motos
foreach($motos as $valor){
    echo $valor. "<br>";
}
echo "<hr>";



// Função Count em clientes
$totalClientes = count($clientes);
var_dump($totalClientes);
echo "O total de clientes armazenado no array é <b>$totalClientes</b> segue abaixo os valores desse array:";
echo "<br><br>";

// Foreach dos clientes
foreach ($clientes as $valor) {
    echo $valor. "<br>";
}
echo "<hr>";



// Arrays Associativos
$pessoa = array("nome"=> "Roodney Moraes", "idade"=> 23, "altura"=> 1.75);
$pessoa["cidade"] = "Mogi das Cruzes";

print_r($pessoa);
var_dump($pessoa);

echo "Seu nome é ". $pessoa["nome"]. " você tem ". $pessoa["idade"]. " anos e  sua altura é ". $pessoa["altura"]. " e você mora em ". $pessoa["cidade"]. ".";
echo "<br><br>";

$totalDadosPessoa = count($pessoa);
echo "O total de dados armazenado dentro do array é <b>$totalDadosPessoa</b> segue abaixo os indice e os valores desse array:";
echo "<br><br>";

//Foreach dos dados pessoa
foreach ($pessoa as $indice => $valor) {
    echo $indice.": ".$valor."<br>";
}
echo "<hr>";



// Arrays Multidimensionais
$times = array(
            "cariocas"=> array("campeao"=> "vasco", "vice"=> "flamengo", "terceiro"=> "botafogo"),
            "paulistas"=> array("campeao"=> "santos","vice"=> "palmeiras", "terceiro"=> "são paulo"),
            "baianos"=> array("campeao"=> "bahia", "vice"=> "vitoria", "terceiros"=> "itabuna"));

print_r($times);
var_dump($times);
echo "Buscando um dado no Array Multidimensionais: <b>". $times["cariocas"]["vice"]."</b>";
echo "<hr>";



echo "<b>Usando Foreach para mostrar a classificação dos times cariocas:</b>";
echo "<br>";

// Foreach dos times cariocas
foreach($times["cariocas"] as $indice => $valor){
        echo $indice. ": ". $valor. "<br>";
}
echo "<hr>";



echo "<b>Usando Foreach para mostrar a classificação dos times paulistas:</b>";
echo "<br>";

// Foreach dos times paulista
foreach($times["paulistas"] as $indice => $valor){
    echo $indice. ": ". $valor. "<br>";
}
echo "<hr>";



echo "<b>Usando Foreach para mostrar a classificação dos times baianos:</b>";
echo "<br>";

// Foreach dos times baianos
foreach($times["baianos"] as $indice => $valor){
    echo $indice. ": ". $valor. "<br>";
}
echo "<hr>";
?>