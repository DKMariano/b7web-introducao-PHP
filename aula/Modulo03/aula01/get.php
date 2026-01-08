<?php
    /*
        SUPERGLOBAIS NO PHP

        $_GET é um array superglobal que armazena os dados
        enviados pela URL (método GET).

        isset()  -> verifica se a variável EXISTE
        empty()  -> verifica se a variável EXISTE e SE TEM VALOR
    */

    // Recupera os valores enviados pela URL
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $cidade = $_GET['cidade'];

    // Exibe uma mensagem usando os dados recebidos
    echo "<br>Olá, $nome ! Você tem $idade anos e mora em $cidade!<br>";

    /*
        Verifica a variável 'campanha'

        !empty():
        - entra no IF apenas se a variável existir
          E tiver algum valor (não vazio)
    */
    if (!empty($_GET['campanha'])) {

        // Guarda o número da campanha em uma variável
        $numero_campanha = $_GET['campanha'];

        // Exibe a campanha utilizada
        echo "<br>Você veio pela campanha " . $numero_campanha . "!";

    } else {

        /*
            Este bloco será executado quando:
            - a variável campanha não existir
            OU
            - existir, mas estiver vazia
        */
        echo "<br>Variável não definida.";
    }

    /*
        Exibe todo o conteúdo do array $_GET
        <pre> mantém a formatação para facilitar a leitura
    */
    echo '<pre>';
        var_dump($_GET);
    echo '</pre>';
?>
