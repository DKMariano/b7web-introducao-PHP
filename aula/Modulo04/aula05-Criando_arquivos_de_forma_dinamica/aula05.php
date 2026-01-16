<?php

//fgerar novo arquivo
// "a" → modo append, que ACRESCENTA conteúdo no final do arquivo
// modo append cria um arquivo se ele não existir, posiciona o ponteino ao final do arquivo
// "w" → modo de escrita cria o arquivo se ele não existrir, apaga o conteúdo do arquivo anterior
// "w+" → modo de escrita cria o arquivo se ele não existrir, apaga o conteúdo do arquivo anterior, posicona o ponteiro no final do arquivo
// "r"  -> modo de read (leitura), posiciona o ponteiro no inicio e gera um erro se o arquivo não existir
// "x"  -> Criação Exclusiva,  cria o arquivo e abre o arquivo para escrita somente se ele já existir a função retorna false.


$arquivo = fopen("cidades.txt", "a");

fwrite($arquivo, "São Paulo");

fclose($arquivo);

$arquivo2 = fopen("comida.txt", "w");

fwrite($arquivo2, "Abará");

fclose($arquivo2);


?>