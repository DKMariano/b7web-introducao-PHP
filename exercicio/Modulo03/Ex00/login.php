<?php

/**
 * Usuário válido: admin
 * Senha válida: admin
 */

// Inicia a sessão para poder usar $_SESSION
session_start();

// Verifica se usuário e senha foram enviados e não estão vazios
if(!empty($_POST['usuario']) && !empty($_POST['password'])){

    // Captura o usuário e remove possíveis códigos HTML
    $user = htmlspecialchars($_POST['usuario']);

    // Captura a senha e remove possíveis códigos HTML
    $password = htmlspecialchars($_POST['password']);

    // Captura o tema escolhido
    $tema = $_POST['tema'];

    // Verifica se usuário e senha estão corretos
    if($user == 'admin' && $password == "admin"){

        // Guarda o usuário na sessão (login realizado)
        $_SESSION['usuario'] = $user;

        // Cria um cookie para salvar o tema escolhido
        setcookie('tema', $tema, time() + 3600, '/');

        // Redireciona para a página protegida
        header("Location: welcome.php");
        exit;

    } else {
        // Login inválido: redireciona com erro 1
        header("Location: index.php?erro=1");
        exit;
    }

} else {
    // Se algum campo estiver vazio, redireciona com erro 2
    header("Location: index.php?erro=2");
    exit;
}
?>
