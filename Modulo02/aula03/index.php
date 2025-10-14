<?php
// ========================================================================
// 📘 AULA: INCLUSÃO DE ARQUIVOS EM PHP
// ========================================================================
// Este script demonstra como incluir arquivos externos no PHP utilizando
// as instruções include e require.
// ========================================================================


// --------------------------------------------------------------
// Exemplo de uso de include (comentado)
// --------------------------------------------------------------
// include('dados.php');
// ou simplesmente:
// include 'dados.php';
//
// ➜ O "include" tenta carregar o arquivo informado.
//    - Se o arquivo existir → ele é carregado normalmente.
//    - Se o arquivo **não** existir → o PHP gera um *warning*
//      (aviso), mas o restante do código continua a ser executado.


// --------------------------------------------------------------
// Exemplo de uso de require (em uso neste código)
// --------------------------------------------------------------
require 'dados.php';
//
// ➜ O "require" também carrega o arquivo informado,
//    mas com uma diferença importante:
//    - Se o arquivo **não** existir → o PHP gera um *fatal error*
//      (erro fatal) e **interrompe a execução do script**.
//
//    ✔ Use "require" quando o arquivo for essencial
//      para o funcionamento do código.
//    ✔ Use "include" quando o arquivo for opcional
//      (ex: um menu, um rodapé, etc.)



/**
 * 🔍 RESUMO:
 * 
 * INCLUDE
 * - Inclui o arquivo se ele existir.
 * - Caso não exista → gera um aviso (Warning).
 * - O código continua sendo executado normalmente.
 * - Uso: quando o arquivo é OPCIONAL.
 * 
 * REQUIRE
 * - Inclui o arquivo se ele existir.
 * - Caso não exista → gera um erro fatal (Fatal error).
 * - A execução do script é INTERROMPIDA.
 * - Uso: quando o arquivo é ESSENCIAL.
 */
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de Arquivos</title>
</head>
<body>
    <!-- 
        🧩 Aqui temos o corpo da página HTML.

        O PHP processa as variáveis incluídas no arquivo externo.
        No caso, 'dados.php' provavelmente define uma variável $nome,
        por exemplo: 
            <?php $nome = "Dimitrius"; ?>
        
        Essa variável é usada dentro do HTML abaixo.
    -->
    <h1>Hello World, eu sou <?=$nome?></h1>
    <!-- 
        ⚙️ O atalho <?=$variavel?> é equivalente a 
            <?php echo $variavel; ?>
        Serve para imprimir valores PHP diretamente no HTML.
    -->
</body>
</html>
