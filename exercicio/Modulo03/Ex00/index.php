<?php
    if(!empty($_GET['erro'])){
        if($_GET['erro'] == 1){
            echo "<p style='color:red;'>Usuário ou senha inválidos.</p>";
        } elseif ($_GET['erro']==2) {
            echo "<p style='color:red;'>Preencha todos os dados</p>";
        }
    }
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio_cookies_session_themaColor</title>
</head>
<body>
    <form method="post" action="login.php">
        <label for="usuario">Usuário: </label>
        <input type="text" name="usuario" id="usuario"> 
        
        <br>
        
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password">

        <br>

        <label for="lembrar">Tema Preferido</label>
        <select name="tema" >
            <option value="escuro">escuro</option>
            <option value="claro">claro</option>
        </select>

        <br>

        <input type="submit" value="Login">

    </form>
    
</body>
</html>