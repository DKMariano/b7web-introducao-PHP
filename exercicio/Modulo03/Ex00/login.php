<?php

/**
 * Usuario válido: admin
 * Senha válida: admin
 */

session_start();

if(!empty($_POST['usuario']) && !empty($_POST['password'])){
    $user = htmlspecialchars($_POST['usuario']);
    $password = htmlspecialchars($_POST['password']);
    $tema = $_POST['tema'];
    if( $user == 'admin' && $password == "admin"){
        $_SESSION['usuario'] = $user;
        setcookie('tema', $_POST['tema']);
        header("Location: welcome.php");
        exit;
    } else{
        header("Location: index.php?erro=1");
        exit;
    }
}else {
    header("Location: index.php?erro=2");
    exit;
}


?>