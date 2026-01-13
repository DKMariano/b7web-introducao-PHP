<?php 
session_start();

//Se não tiver autenticado, ele vai dá erro!
if(empty($_SESSION['user'])){
    die('Usuario não autenticado');
}

// Se tiver, ele faz a transferência
$contaDestino = $_GET['conta_destino'];
$valor = $_GET['valor'];
$_SESSION['saldo'] -= $valor;

echo "Olá, ". $_SESSION['user'].". Transferência de R$ $valor para a conta $contaDestino.";

echo "<br/>Seu novo saldo é: ".$_SESSION['saldo'];
?>