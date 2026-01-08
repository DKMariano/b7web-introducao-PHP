<?php
    /*
        Verifica se as variáveis 'login' e 'password'
        foram enviadas e possuem valor
    */
    if (!empty($_GET['login']) && !empty($_GET['password'])) {

        // Guarda os valores enviados pelo formulário
        $login = $_GET['login'];
        $password = $_GET['password'];

        // Exibe os dados recebidos
        echo "Seu login é: $login . <br> e a senha: $password .";
    }
?>
