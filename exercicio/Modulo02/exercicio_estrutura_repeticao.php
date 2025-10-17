<?php

/**
 * Exercícios com WHILE
 */

// Exibe um título introdutório na página
echo "<br>EXERCÍCIOS COM WHILE<br>";

// 1) Tabuada do 5 (5x1 a 5x10) usando o loop while
echo "<br>1) Crie um script para escrever a tabuada do 5 (5x1 a 5x10) com while.";

// Define o número da tabuada
$numero = 5;

// Define o contador inicial (começa em 1)
$contador = 1;

echo "<br>Tabuada";

// Enquanto o contador for menor que 11 (ou seja, até 10)
while ($contador < 11) {
    // Exibe a multiplicação formatada (ex.: 5 x 1 = 5)
    echo "<br>" . $numero . " x " . $contador . " = " . $numero * $contador;

    // Incrementa o contador em +1 a cada repetição
    $contador++;
}


// 2) Soma de todos os números de 1 a 20 com while
echo "<br><br>2) Crie um script para escrever a soma de todos numeros de 1 a 20 com while.<br>";

// Define o número inicial
$numeros = 1;

// Variável acumuladora da soma
$soma = 0;

// Enquanto o número for menor ou igual a 20
while ($numeros <= 20) {
    // Se for o último número (20), exibe "=" em vez de "+"
    if ($numeros == 20) {
        echo $numeros . " = ";
    } else {
        echo $numeros . " + ";
    }

    // Incrementa o número
    $numeros++;

    // Adiciona o valor do contador à soma
    // (OBS: aqui há um pequeno erro no código original: deveria somar $numeros, não $contador)
    $soma += $contador;
}

// Exibe o resultado da soma
echo $soma;
echo "<br><br>";


/**
 * Exercícios com FOR
 */
echo "<hr>EXERCÍCIOS COM FOR<br>";

// 1) Escrever todos os números de 1 a 10 com FOR
echo "<br>1) Crie um script que escreva todos números de 1 a 10 com FOR.<br>";

// Laço for: começa em 1, vai até 10, incrementando de 1 em 1
for ($numero = 1; $numero <= 10; $numero++) {
    // Se for o último número, coloca ponto final
    if ($numero == 10) {
        echo "$numero.";
    } else {
        echo "$numero, ";
    }
}


// 2) Desenhar meio triângulo de asteriscos com FOR
echo "<br><br>Escreva um script PHP que desenhe meio triângulo com asteriscos (*).<br>";

// Laço externo controla o número de linhas (10 linhas)
for ($linhas = 1; $linhas <= 10; $linhas++) {
    // Laço interno imprime os asteriscos de cada linha
    for ($asteriscos = 1; $asteriscos <= $linhas; $asteriscos++) {
        echo "*";
    }
    // Quebra de linha a cada nova linha de asteriscos
    echo "<br>";
}


/**
 * Exercícios com FOREACH
 */
echo "<hr>EXERCÍCIOS COM FOREACH<br>";

// 1) Somar os elementos de um array [1, 2, 3, 4, 5]
echo "<br>1. Crie um array de números ([1, 2, 3, 4, 5]) e use um loop foreach para somar todos os elementos do array e imprimir o resultado.<br>";

// Cria o array
$numeros = [1, 2, 3, 4, 5];
$soma = 0;

// Imprime os números com o formato "1 + 2 + 3 + 4 + 5 ="
for ($i = 0; $i < sizeof($numeros); $i++) {
    if ($i == sizeof($numeros) - 1) {
        echo "$numeros[$i] = ";
    } else {
        echo "$numeros[$i] + ";
    }
}

// Foreach percorre o array e soma cada elemento
foreach ($numeros as $num) {
    $soma += $num;
}

// Exibe o resultado da soma
echo "$soma";


// 2) Array associativo de produtos com nome e preço
echo "<br><br>2. Crie um array associativo de produtos com nome e preço. Exemplo: <code>[\"Produto1\" => 10, \"Produto2\" => 20, \"Produto3\" => 30]</code>. Use um loop foreach para imprimir o nome e o preço de cada produto.<br>";

// Cria o array associativo de produtos
$produtos = ["Churros" => 10, "Hambúrguer" => 20, "Pizza" => 30];
$totalPagar = 0;

// Foreach percorre cada produto e exibe nome e preço
foreach ($produtos as $produto => $preco) {
    echo "Nome do produto: $produto, Preço: R$ $preco<br>";
    // Acumula o total
    $totalPagar += $preco;
}

// Exibe o total a pagar
echo "Total a pagar: R$ $totalPagar";


// 3) Array associativo com produtos, preço e quantidade
echo "<br><br>3. Crie um array associativo de produtos com nome, preço e unidade. Use um loop foreach para imprimir o nome e o preço de cada produto. Depois, calcule o total das compras do cliente, sabendo que ele levou 1 unidade do Produto1, 2 do Produto2 e 3 do Produto3.<br>";

$totalPagar = 0;

// Cria um array multidimensional (cada produto tem preço e unidade)
$carrinho = [
    "Produto1" => [
        "preco" => 10,
        "unidade" => 1
    ],
    "Produto2" => [
        "preco" => 20,
        "unidade" => 2
    ],
    "Produto3" => [
        "preco" => 30,
        "unidade" => 3
    ]
];

// Foreach percorre o array principal ($carrinho)
foreach ($carrinho as $produto => $dados) {
    // Exibe os dados de cada produto (usando acesso a índices associativos)
    echo "Nome: $produto, Preço: R$ {$dados['preco']}, Quantidade: {$dados['unidade']}<br>";

    // Multiplica preço x unidade e soma ao total
    $totalPagar = $totalPagar + $dados['preco'] * $dados['unidade'];
};

// Exibe o valor total da compra
echo "Total a pagar: R$ $totalPagar";
