<?php

/**
 * Deve exibir "Bem vindo [LOGIN DO USUARIO] se ele estiver logado".
 * Deve ter a opção de sair.
 */
    session_start();

    if(empty($_SESSION['usuario'])){
        header("Location: index.php");
        exit;
    }  

    $user = htmlspecialchars($_SESSION['usuario']);

    if(!empty($_COOKIE['tema'])){
        $tema = $_COOKIE['tema']; 

        if($tema == 'escuro'){
            $cor =' #333';
        } else{
            $cor = "#fff";
        }
    
    }
    
?> 

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas Vindas</title>
</head>

<body style="background-color: <?= $cor ?> ;">

    <?php
        echo "<br>Bem vindo, $user!!!!<br>";
        echo "O tema que você escolheui foi $tema.<br>";  
        

    ?>
    
    <br>
    
    <a href="logout.php">Sair</a>

</body>
</html>
    
