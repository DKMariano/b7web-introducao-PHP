<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio_cookies_session_themaColor</title>
</head>
<body>
    <form action="post" action="login.php">
        <label for="username">Usuário: </label>
        <input type="text" name="usuario" id="usuario"> 
        
        <br>
        
        <label for="senha">Senha:</label>
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