<?php

// ===============================
// Abertura e leitura de arquivos
// ===============================

// Em PHP, funções relacionadas a arquivos fazem parte do que chamamos
// de "filesystem". Muitas delas começam com a letra "f":
// fopen, fread, fclose, etc.

// Modos de abertura mais comuns:
// "r"  -> leitura (read)
// "w"  -> escrita (write)
// "a"  -> adicionar (append)

// Ao abrir um arquivo com fopen, o PHP cria um "resource",
// que é uma referência para o arquivo aberto na memória.
$arquivo = fopen("nomes.txt", "r");

// -------------------------------
// Leitura parcial do arquivo
// -------------------------------

// fread lê uma quantidade EXATA de bytes a partir da posição atual
// do ponteiro do arquivo.

// Lê os primeiros 5 bytes do arquivo
$nomes = fread($arquivo, 5);

// O ponteiro agora avançou 5 bytes.
// Esta leitura começa exatamente de onde a anterior parou.
$nomes2 = fread($arquivo, 5);

// Agora estamos lendo byte por byte (1 byte por vez),
// apenas para demonstrar que o ponteiro continua avançando.
$nomes3 = fread($arquivo, 1);
$nomes4 = fread($arquivo, 1);
$nomes5 = fread($arquivo, 1);

// -------------------------------
// Exibição dos dados lidos
// -------------------------------

// Exibe o conteúdo lido em cada etapa.
// <br> é usado para quebrar linha no HTML.
echo "<br>Nomes: $nomes <br>";
echo "<br>Nomes2: $nomes2 <br>";
echo "<br>Nomes3: $nomes3 <br>";
echo "<br>Nomes4: $nomes4 <br>";
echo "<br>Nomes5: $nomes5 <br>";

// -------------------------------
// Retornando o ponteiro ao início
// -------------------------------

// rewind move o ponteiro do arquivo de volta para o início.
// Sem isso, novas leituras continuariam do ponto onde parou.
rewind($arquivo);

// -------------------------------
// Descobrindo o tamanho do arquivo
// -------------------------------

// filesize retorna o tamanho do arquivo em bytes.
// Isso é útil para saber exatamente quanto conteúdo existe no arquivo.
$bytes = filesize("nomes.txt");

echo "<br>Bytes: $bytes <br>";

// -------------------------------
// Leitura completa do arquivo
// -------------------------------

// Agora lemos o arquivo inteiro de uma só vez,
// usando o tamanho total em bytes.
$todos_nomes = fread($arquivo, $bytes);

echo "<br>Todos os nomes: $todos_nomes <br>";

// -------------------------------
// Fechamento do arquivo
// -------------------------------

// fclose fecha o arquivo e libera o recurso da memória.
// Mesmo existindo Garbage Collector, arquivos devem ser fechados manualmente.
fclose($arquivo);

?>
