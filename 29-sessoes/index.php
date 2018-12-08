<?php
session_start();

$_SESSION['cor'] = "Verde";
$_SESSION['carro'] = "Veloster";

var_dump($_SESSION);
echo "<br>";

echo $_SESSION['cor'];
echo "<br>";
echo $_SESSION['carro'];
echo "<br>";
echo session_id();

?>