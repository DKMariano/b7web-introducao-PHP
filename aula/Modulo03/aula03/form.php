<?php

    // $_GET
    //   - Dados são passados pela URL
    //   - Limite de 2000 caracteres
    //   - Dados ficam expostos e são facilmente manipuláveis
    
    //   $_POST
    //   - Dados são passados pelo corpo da requisição http
    //   - Não há limite de tamanho
    //   - Os dados não são tão facilmente modificáveis pelo usuário



    if(!empty($_POST['login']) && !empty($_POST['password'])){
        $login = $_POST['login'];
        $password = $_POST['password'];

        echo "Seu login é: $login . <br>Sua senha: $password .";
    }


?>