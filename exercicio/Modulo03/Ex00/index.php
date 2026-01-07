<?php
    // Verifica se o parâmetro 'erro' existe na URL e não está vazio
    if(!empty($_GET['erro'])){

        // Se erro for igual a 1, significa usuário ou senha inválidos
        if($_GET['erro'] == 1){
            echo "<p style='color:red;'>Usuário ou senha inválidos.</p>";

        // Se erro for igual a 2, significa que algum campo não foi preenchido
        } elseif ($_GET['erro'] == 2) {
            echo "<p style='color:red;'>Preencha todos os dados</p>";
        }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <!-- Define que o site se adapta a telas diferentes (celular, tablet, etc.) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercicio_cookies_session_themaColor</title>
</head>
<body>

    <!-- Formulário envia dados via POST para login.php -->
    <form method="post" action="login.php">

        <!-- Campo de usuário -->
        <label for="usuario">Usuário: </label>
        <input type="text" name="usuario" id="usuario"> 
        
        <br>

        <!-- Campo de senha -->
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password">

        <br>

        <!-- Escolha do tema -->
        <label for="lembrar">Tema Preferido</label>
        <select name="tema">
            <option value="escuro">escuro</option>
            <option value="claro">claro</option>
        </select>

        <br>

        <!-- Botão de envio -->
        <input type="submit" value="Login">

    </form>
    
</body>
</html>
