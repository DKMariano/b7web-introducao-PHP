<?php
// Declara a variável $idade com valor inicial igual a 1
$idade = 1;

// =============================
// EXEMPLO 1 – WHILE (enquanto)
// =============================

// O loop while repete enquanto a condição for verdadeira.
// Aqui, enquanto $idade for menor ou igual a 10.
while ($idade <= 10) {
    // Mostra o valor atual de $idade
    echo "A sua idade é: $idade <br>";

    // Incrementa $idade em +1 a cada repetição
    $idade++;
}

// Quando a condição $idade <= 10 deixar de ser verdadeira,
// o loop termina e o PHP continua a execução normal.
echo "<br>Fim do loop 01<br>";


// =============================
// EXEMPLO 2 – WHILE que NÃO executa
// =============================

// Nesse caso, $idade já está com valor 11 (do loop anterior).
// A condição ($idade < 1) é FALSA logo de início.
while ($idade < 1) {
    // Como a condição é falsa, o PHP NUNCA entra aqui.
    echo "Esse loop nunca será executado";
}

// Essa linha é exibida normalmente, fora do loop.
echo "<br>Fim do loop 02 que não foi executado <br>";


// =============================
// EXEMPLO 3 – DO WHILE
// =============================

// O loop do...while executa o bloco PELO MENOS UMA VEZ,
// mesmo que a condição seja falsa desde o começo.
do {
    echo "<br> Esse loop vai acontecer mesmo o valor $idade sendo maior que 1 <br>";
} while ($idade < 1); // condição falsa, mas o bloco acima já foi executado 1 vez


// =============================
// EXEMPLO 4 – FOR simples
// =============================

// O for possui três partes: inicialização; condição; incremento.
// Aqui, começamos em 1, repetindo enquanto for menor que 10,
// e aumentando +1 a cada vez.
echo "<br>";
for ($idade = 1; $idade < 10; $idade++) {
    echo 'Olá, você tem ' . $idade . '<br>';
}


// =============================
// EXEMPLO 5 – FOR com incremento personalizado
// =============================

// Aqui, a diferença é que a cada repetição $idade soma +5.
// O loop continua enquanto $idade for menor que 100.
echo "<br>";
for ($idade = 1; $idade < 100; $idade += 5) {
    echo 'Olá, você tem ' . $idade . '<br>';
}


// =============================
// EXEMPLO 6 – FOR com ARRAYS
// =============================

// Cria um array de nomes
$nomes = ['Alessandro', 'Bonkienky', 'João', 'Maria'];

echo "<br>";
// Percorre o array de forma manual, com índice numérico (0 até 3)
for ($i = 0; $i < 4; $i++) {
    echo "$nomes[$i] <br>";
}


// =============================
// EXEMPLO 7 – FOREACH (forma simplificada)
// =============================

// O foreach percorre automaticamente todos os elementos de um array.
// Cada item do array é colocado na variável $nome.
echo "<br>";
foreach ($nomes as $nome) {
    echo "$nome <br/>";
}


// =============================
// EXEMPLO 8 – FOREACH com ARRAY ASSOCIATIVO
// =============================

// Cria um array associativo (chave => valor)
$dados = [
    'nome' => 'Alessandro',
    'idade' => 33
];

echo "<br>";

// Percorre o array, mostrando apenas os valores
foreach ($dados as $item) {
    echo "$item <br>";
}

echo "<br>";

// Percorre o array, mostrando o valor (usando chave e valor)
foreach ($dados as $chave => $valor) {
    echo "$valor <br>";
}

echo "<br>";

// Percorre o array, mostrando apenas as chaves
foreach ($dados as $chave => $valor) {
    echo "$chave <br>";
}

echo "<br>";

// Percorre o array, mostrando chave e valor juntos (forma completa)
foreach ($dados as $chave => $valor) {
    echo "$chave: $valor<br>";
}



?>
