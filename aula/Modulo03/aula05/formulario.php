<?php

// Exemplo comentado de verificação do método HTTP
// $_SERVER['REQUEST_METHOD'] informa como a página foi acessada (GET ou POST)
//
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     echo "Foi enviado um formulário pelo método post";
// } else {
//     echo "Não foi enviado um formulário pelo método post";
// }


// Verifica se os campos 'usuario' e 'senha' existem no POST
// e se NÃO estão vazios
// empty() retorna true se:
// - a variável não existir
// - OU existir, mas estiver vazia
if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {

    // htmlspecialchars() converte caracteres especiais em entidades HTML
    // Isso evita que o navegador interprete o que o usuário digitou
    // como código HTML ou JavaScript (proteção contra XSS)
    $usuario = htmlspecialchars($_POST['usuario']);
    $senha   = htmlspecialchars($_POST['senha']);

    // Variável usada para armazenar a mensagem final
    // Ela será exibida mais abaixo no HTML
    $mensagem = null;

    // Compara os dados digitados com valores fixos
    // Este é apenas um exemplo didático de login
    if ($usuario == 'admin' && $senha == 'admin') {
        $mensagem = "<br>Você logou com sucesso.<br>";
    } else {
        $mensagem = "<br>Usuário ou senha inválida.<br>";
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Define o conjunto de caracteres corretamente (acentos, ç, etc.) -->
    <meta charset="UTF-8">

    <!-- Permite adaptação da página em celular e tablet -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulário PHP</title>
</head>
<body>

    <!-- 
        action vazio ("") faz o formulário enviar os dados
        para o próprio arquivo
        method="post" envia os dados de forma mais segura que GET
    -->
    <form action="" method="post">

        <!-- 
            Campo de usuário
            O value usa:
            <?= $usuario ?? '' ?>
            Isso evita erro caso a variável ainda não exista
            e mantém o valor digitado após o envio
        -->
        <input type="text"
               name="usuario"
               placeholder="Digite o nome de usuário"
               value="<?= $usuario ?? '' ?>">

        <br>

        <!-- 
            Campo de senha
            type="password" oculta os caracteres digitados na tela
            O value também é mantido após o envio
        -->
        <input type="password"
               name="senha"
               placeholder="Digite a senha"
               value="<?= $senha ?? '' ?>">

        <!-- Botão que envia o formulário -->
        <input type="submit" value="Enviar">
    </form>

    <?php
        // Exibe a mensagem apenas se o formulário foi enviado via POST
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            echo $mensagem;
        }
    ?>

</body>
</html>
