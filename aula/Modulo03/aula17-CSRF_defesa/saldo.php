<?php
// Inicia/continua a sessão, pois o saldo está guardado em $_SESSION
session_start();

// Verifica se existe saldo salvo na sessão.
if (!empty($_SESSION['saldo'])) {

    // Mostra o saldo atual.
    echo 'Seu saldo é: ' . $_SESSION['saldo'];

} else {

    // Se não existir, avisa que não encontrou.
    echo 'Saldo não encontrado na sessão.';
}

?>
