<?php

// fwrite() → função usada para ESCREVER dados em um arquivo
// "w" → modo de escrita que TRUNCA o arquivo
//       (apaga todo o conteúdo anterior antes de escrever)
// "a" → modo append, que ACRESCENTA conteúdo no final do arquivo

// Abre o arquivo "nomes.txt" no modo escrita ("w")
// Se o arquivo existir, todo o conteúdo anterior será apagado
// Se não existir, o arquivo será criado
$arquivo = fopen("nomes.txt", "w");

// Escreve o texto no arquivo
// Como o modo é "w", esse texto será o único conteúdo do arquivo neste momento
fwrite($arquivo, "Apaguei a lista anterior");

// Fecha o arquivo
// Importante para garantir que os dados sejam salvos corretamente
// e para liberar o recurso da memória
fclose($arquivo);

// Reabre o mesmo arquivo agora no modo append ("a")
// Nesse modo, o conteúdo novo será adicionado ao final do arquivo,
// sem apagar o que já existe
$arquivo = fopen("nomes.txt", "a");

// Escreve uma nova linha seguida do nome "Cristiano"
// O "\n" serve para quebrar a linha antes de escrever o nome
fwrite($arquivo, "\nCristiano");

?>
