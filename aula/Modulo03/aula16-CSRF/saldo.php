<?php
// Inicia ou retoma a sessão
session_start();

// Verifica se existe saldo armazenado na sessão
if (!empty($_SESSION['saldo'])) {

    // Exibe o saldo atual
    echo 'Seu saldo é: ' . $_SESSION['saldo'];

} else {

    // Caso não exista saldo na sessão
    echo 'Saldo não encontrado na sessão.';
}

?>
