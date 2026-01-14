<?php 

// Inicia ou retoma a sessão
session_start();

// Verifica se o usuário está autenticado
// Se não existir a variável 'user' na sessão, o script é interrompido
if(empty($_SESSION['user'])){
    die('Usuario não autenticado');
}

// Recupera os dados enviados pela URL (método GET)
// Esses dados podem ser manipulados facilmente pelo navegador
$contaDestino = $_GET['conta_destino'];
$valor = $_GET['valor'];

// Subtrai o valor do saldo armazenado na sessão
$_SESSION['saldo'] -= $valor;

// Exibe a mensagem de confirmação da transferência
echo "Olá, ". $_SESSION['user'].". Transferência de R$ $valor para a conta $contaDestino.";

// Quebra de linha em HTML
echo "<br/>Seu novo saldo é: ".$_SESSION['saldo'];
?>
