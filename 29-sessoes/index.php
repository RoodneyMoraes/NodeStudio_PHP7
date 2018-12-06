<?php
session_start();

$_SESSION['cor'] = "Verde";
$_SESSION['carro'] = "Veloster";

echo $_SESSION['cor'];
echo "<br>";
echo $_SESSION['carro'];
echo "<br>";
echo session_id();

?>