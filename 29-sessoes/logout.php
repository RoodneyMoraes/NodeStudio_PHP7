<?php
// Inica a sessão
session_start();
// Limpa a sessão
session_unset();
// Encerra a sessão
session_destroy();

echo "Você encerrou a sessão!"

?>