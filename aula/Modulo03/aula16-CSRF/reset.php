<?php

// Inicia ou retoma a sessão do usuário
session_start();

// Simula um usuário autenticado
$_SESSION['user'] = 'Alessandro';

// Define o saldo inicial do usuário
$_SESSION['saldo'] = 51000;

// Mensagem simples para confirmar que o saldo foi resetado
echo 'Saldo Resetado';

?>
