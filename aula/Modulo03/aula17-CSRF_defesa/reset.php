<?php

// Inicia/continua a sessão para poder mexer em $_SESSION
session_start();

// Simula um usuário autenticado.
// Ou seja: agora o sistema considera que o usuário está "logado".
$_SESSION['user'] = 'Alessandro';

// Define (ou redefine) o saldo inicial para testes.
$_SESSION['saldo'] = 51000;

// Mensagem simples para confirmar que o reset foi feito.
echo 'Saldo Resetado';

?>
