<?php 

// Inicia/continua a sessão.
// Precisamos disso para acessar:
// - $_SESSION['user']
// - $_SESSION['saldo']
// - $_SESSION['csrf_token']
session_start();

// Se não tiver autenticado, ele vai dá erro!
// Aqui você impede que alguém transfira sem estar "logado".
if(empty($_SESSION['user'])){
    die('Usuario não autenticado');
}

// Pega o token CSRF que foi guardado na sessão lá no banco.php
$csrf = $_SESSION['csrf_token'];

// Compara o token recebido via GET com o token salvo na sessão.
// Se forem diferentes, significa que a requisição NÃO veio do seu formulário.
// Então você bloqueia, evitando CSRF.
if($_GET['csrf_token'] != $csrf){
    die('CSRF TOKEN não é valido');
}

// Se tiver, ele faz a transferência
// Pega os dados recebidos pela URL (GET)
$contaDestino = $_GET['conta_destino'];
$valor = $_GET['valor'];

// Diminui o saldo atual pelo valor transferido
$_SESSION['saldo'] -= $valor;

// Mensagem de confirmação da transferência
echo "Olá, ". $_SESSION['user'].". Transferência de R$ $valor para a conta $contaDestino.";

// Mostra o saldo após a transferência
echo "<br/>Seu novo saldo é: ".$_SESSION['saldo'];




?>
