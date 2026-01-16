<?php

// -----------------------------------------------------
// Abertura e Fechamento de Arquivos em PHP
// -----------------------------------------------------
// Nesta aula estamos trabalhando com arquivos de texto,
// usando funções da biblioteca de filesystem do PHP.
//
// fopen()  → abre um arquivo
// fclose() → fecha um arquivo
//
// O retorno de fopen() é um "resource",
// que representa uma ligação do PHP com o arquivo.
// -----------------------------------------------------

// Tentativa de abrir um arquivo que NÃO existe
// "r" significa modo leitura (read)
// Nesse modo, o arquivo precisa existir
$arquivo_inexistente = fopen("nomes2.txt", "r");

// Apenas uma quebra de linha visual no navegador
echo "<br>Arquivo 01:";

// Verificação se o arquivo foi aberto com sucesso
// Se fopen falhar, ele retorna false
if ($arquivo_inexistente) {

    // Esse código só executa se o arquivo foi aberto
    echo "<br>Arquivo 01 o aberto com sucesso.<br>"; 

} else {

    // Esse código executa se o arquivo não existir
    // ou não puder ser aberto
    echo "<br>Arquivo 01 não encontrado ou não pode ser aberto<br>";
}

// Quebra de linha para separar visualmente as saídas
echo "<br>";

// Tentativa de abrir um arquivo que EXISTE
$arquivo = fopen("nomes.txt", "r");

// Identificação visual do segundo arquivo
echo "<br>Arquivo 02:";

// Verificação se o arquivo foi aberto corretamente
if ($arquivo) {

    // Se fopen retornou um resource válido,
    // o arquivo foi aberto com sucesso
    echo "<br>Arquivo 02 o aberto com sucesso.<br>"; 

    // Fecha o arquivo após o uso
    // Isso libera o recurso na memória
    fclose($arquivo);

} else {

    // Caso o arquivo não seja encontrado
    // ou não tenha permissão de leitura
    echo "<br>Arquivo 02 não encontrado ou não pode ser aberto<br>";
}

// Outra quebra de linha visual
echo "<br>";

// Exibe o conteúdo da variável $arquivo
// Nesse momento, o arquivo já foi fechado,
// então o resource não está mais ativo
print_r($arquivo);






?>