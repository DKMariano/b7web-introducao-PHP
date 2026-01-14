<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Define o conjunto de caracteres como UTF-8 -->
    <meta charset="UTF-8">

    <!-- Faz a página se adaptar a celulares e telas menores -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título da página exibido na aba do navegador -->
    <title>Banco- CSRF(Cross-Site Request Forgery)</title>
</head>
<body>

    <!-- 
        ATENÇÃO:
        O formulário envia os dados diretamente para transferir.php.
        Como o método é GET, os dados vão pela URL,
        o que é inseguro para operações sensíveis como transferência.
    -->
    <form action="http://localhost/dimmy/Estudo/b7web/php/introducao/aula/Modulo03/aula16-CSRF/transferir.php" method="get">

        <!-- Campo para informar a conta de destino -->
        <label for="conta_destino">Conta Destino:</label>
        <input type="text" name="conta_destino" id="conta_destino" value="12345">
        
        <!-- Label do valor (está vazia, mas não impede o funcionamento) -->
        <label for="valor:"></label>

        <!-- Campo numérico para o valor da transferência -->
        <input type="number" name="valor" id="valor" value="1000">

        <!-- Botão que envia o formulário -->
        <button type="submit">Transferir</button>
        
    </form>
</body>
</html>
