<?php

    // Inicia (ou continua) a sessão.
    // A sessão é onde vamos guardar informações como:
    // - usuário logado
    // - saldo
    // - token CSRF
    session_start();

    // Gera um número aleatório para ser usado como token CSRF.
    // Esse token serve para provar que a requisição veio do seu formulário
    // e não de uma página externa (ataque CSRF).
    $csrf = random_int(1111, 9999);

    // Salva o token na sessão.
    // Assim, no transferir.php, conseguimos comparar:
    // - token enviado pelo formulário (GET)
    // - token que está guardado na sessão
    $_SESSION['csrf_token'] = $csrf;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco- CSRF(Cross-Site Request Forgery)</title>
</head>
<body>
    <!-- ALATERE O ENDEREÇO NO ACTION ABAIXO -->
    <!-- Esse form envia os dados para transferir.php -->
    <!-- Como o method é GET, os dados vão pela URL -->
    <form action="http://localhost/dimmy/Estudo/b7web/php/introducao/aula/Modulo03/aula16-CSRF/transferir.php" method="get">

        <!-- Campo oculto: envia o token CSRF junto com a requisição -->
        <!-- Sem esse token correto, o transferir.php deve bloquear -->
        <input type="hidden" name="csrf_token" value="<?= $csrf; ?>">
       
        <!-- Campo para informar a conta destino -->
        <label for="conta_destino">Conta Destino:</label>
        <input type="text" name="conta_destino" id="conta_destino" value="12345">
        
        <!-- Label do valor (observação: aqui seu label está vazio e com for diferente do id) -->
        <label for="valor:"></label>

        <!-- Campo para informar o valor da transferência -->
        <input type="number" name="valor" id="valor" value="1000">

        <!-- Botão que envia o formulário -->
        <button type="submit">Transferir</button>
        
    </form>
</body>
</html>
