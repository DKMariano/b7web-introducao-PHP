<?php
    session_start();

    $csrf = random_int(1111, 9999);

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
    <form action="http://localhost/dimmy/estudo/b7web/php/introducao/aula/Modulo03/aula16-CSRF/transferir.php" method="get">

       
        <label for="conta_destino">Conta Destino:</label>
        <input type="text" name="conta_destino" id="conta_destino" value="12345">
        
        <label for="valor:"></label>
        <input type="number" name="valor" id="valor" value="1000">

        <button type="submit">Transferir</button>
        
    </form>
</body>
</html>