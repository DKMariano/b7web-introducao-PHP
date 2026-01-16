<?php

// EOF significa "End Of File" (fim do arquivo)
// Usamos esse conceito para saber quando parar de ler o arquivo

// Abre o arquivo "nomes.txt" no modo leitura ("r")
// O retorno do fopen é um recurso (resource) que representa o arquivo aberto
$arquivo = fopen("nomes.txt", "r");

// Exibe um título no navegador indicando que a leitura será linha por linha
echo "<br>Linha a linha:<br><br>";

// Lê uma linha do arquivo usando fgets()
// fgets() lê o conteúdo até encontrar uma quebra de linha (\n)
// ATENÇÃO: aqui a linha é lida, mas não é exibida
$nomes = fgets($arquivo);

// Loop while que será executado enquanto NÃO for o fim do arquivo
// feof($arquivo) retorna true quando o ponteiro chega ao final do arquivo
while(!feof($arquivo)){

    // Lê a próxima linha do arquivo a cada repetição do loop
    $nomes = fgets($arquivo);

    // Exibe a linha lida no navegador
    // O <br> serve para quebrar a linha no HTML
    echo "$nomes<br>";
}

// -------------------------------
// Fechamento do arquivo
// -------------------------------

// fclose fecha o arquivo e libera o recurso da memória.
// Mesmo existindo Garbage Collector, arquivos devem ser fechados manualmente.
fclose($arquivo);



?>
