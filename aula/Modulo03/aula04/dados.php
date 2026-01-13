<?php

    // Verifica se os dados do formulário foram enviados via POST
    // (empty() retorna true se não existir OU se estiver vazio)
    if(!empty($_POST['usuario']) && !empty($_POST['senha'])){
    
        // htmlspecialchars() transforma caracteres especiais em entidades HTML.
        // Ex.: "<" vira "&lt;" e ">" vira "&gt;"
        // Isso ajuda a evitar que o navegador interprete o que o usuário digitou como HTML/JS (XSS).
        $usuario = htmlspecialchars($_POST['usuario']);
        $senha = htmlspecialchars($_POST['senha']);

        // Variável que vai guardar a mensagem que será mostrada ao usuário
        $mensagem = null;

        // Compara o que foi digitado com os valores esperados
        // (aqui você está fazendo um login "fixo": admin/admin)
        if($usuario == 'admin' && $senha == 'admin' ){
            $mensagem = "<br>Você logou com sucesso.<br>";
        } else{
            $mensagem = "<br>Usuário ou senha inválida.<br>";
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Charset correto para acentos -->
    <meta charset="UTF-8">

    <!-- Responsividade (celular/tablet) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> XSS (Cross Site Scripting)</title>
</head>
<body>

    <!-- 
        Formulário envia para o próprio arquivo: dados.php
        method="post" faz os dados NÃO irem pela URL (mais adequado que GET para senha).
    -->
    <form action="dados.php" method="post">
        <!-- Campo de usuário -->
        <input type="text" name="usuario" placeholder="Digite o nome de usuário">    
        <br>

        <!-- Campo de senha (type="password" esconde os caracteres na tela) -->
        <input type="password" name="senha" placeholder="Digite a senha">

        <!-- Botão para enviar -->
        <input type="submit" value="Enviar">
    </form>

    <?php
        // Só mostra a mensagem se ela tiver sido definida e não estiver vazia
        if(!empty($mensagem)){
            echo $mensagem;
        } 
    ?>

</body>
</html>
