<?php

/**
 * Objetivo deste arquivo:
 * - Exibir a mensagem "Bem vindo [LOGIN DO USUARIO]" somente se o usuário estiver logado
 * - Aplicar a cor de fundo conforme o tema salvo no cookie
 * - Oferecer a opção de sair (logout)
 */

// Inicia ou retoma a sessão para acessar $_SESSION
session_start();

// Verifica se NÃO existe usuário salvo na sessão
// Se estiver vazio, significa que o usuário não fez login
if(empty($_SESSION['usuario'])){
    // Redireciona para a página de login
    header("Location: index.php");
    // Interrompe a execução do script
    exit;
}

// Recupera o usuário logado da sessão
// htmlspecialchars evita que códigos HTML sejam interpretados no navegador
$user = htmlspecialchars($_SESSION['usuario']);

// Verifica se existe o cookie 'tema'
if(!empty($_COOKIE['tema'])){
    // Recupera o valor do tema salvo no cookie
    $tema = $_COOKIE['tema']; 

    // Se o tema for 'escuro', define uma cor de fundo escura
    if($tema == 'escuro'){
        $cor ='#333';

    // Caso contrário, define uma cor de fundo clara
    } else{
        $cor = "#fff";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <!-- Permite que a página se adapte a diferentes tamanhos de tela -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Boas Vindas</title>
</head>

<!-- Aplica a cor de fundo definida no PHP -->
<body style="background-color: <?= $cor ?>;">

    <?php
        // Exibe mensagem de boas-vindas com o nome do usuário
        echo "<br>Bem vindo, $user!!!!<br>";

        // Exibe o tema escolhido pelo usuário
        echo "O tema que você escolheu foi $tema.<br>";  
    ?>

    <br>

    <!-- Link para encerrar a sessão do usuário -->
    <a href="logout.php">Sair</a>

</body>
</html>
