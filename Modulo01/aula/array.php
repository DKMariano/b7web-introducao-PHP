<?php
    // ================================================
    // 🔸 ARRAYS SIMPLES (INDEXADOS)
    // ================================================

    // Criamos um array simples (indexado) com três frutas.
    // Os índices são automáticos: [0 => "pêra", 1 => "uva", 2 => "maçã"]
    $frutas = ["pêra", "uva", "maçã"];

    // Exibe o elemento na posição 2 (terceiro item): "maçã"
    echo $frutas[2];
    echo "<br>"; // Quebra de linha no HTML


    // Outro array simples, agora com números.
    // Os índices seguem a mesma lógica: [0 => 200, 1 => 300, 2 => 400]
    $numeros = [200, 300, 400];

    // Exibe o elemento na posição 1 (segundo número): "300"
    echo $numeros[1];
    echo "<br>";


    // ================================================
    // 🔸 ARRAYS ASSOCIATIVOS
    // ================================================

    // Aqui usamos um array associativo: cada "chave" é um nome
    // e o "valor" indica a quantidade de carros.
    $carros = [
        "Alessandro" => 1,
        "Maria" => 2,
        "João" => 30
    ];

    // ================================================
    // 🔸 ARRAYS MULTIDIMENSIONAIS
    // ================================================

    // Agora criamos um array mais complexo: um array de arrays.
    // Cada pessoa é uma chave, e o valor é outro array
    // com várias informações (carros, idade, altura, cidade).
    $informacoes = [
        "Alessandro" => [
            "carros" => 1, 
            "idade" => 32,
            "altura" => 174,
            "cidade" => "Rio de Janeiro"
        ],
        "João" => [
            "carros" => 2,
            "idade" => 35,
            "altura" => 160,
            "cidade" => "São Paulo"
        ]
    ];

    // ================================================
    // 🔸 ACESSANDO ELEMENTOS DE ARRAYS
    // ================================================

    echo "<br>";

    // Acessa o valor da chave "Alessandro" no array $carros.
    // Deve imprimir: 1
    echo $carros["Alessandro"];

    // ================================================
    // 🔸 DEPURAÇÃO COM var_dump()
    // ================================================

    // O var_dump mostra a estrutura completa de uma variável,
    // incluindo o tipo de dado e o tamanho de cada elemento.

    echo "<br><pre>";  // <pre> formata o texto como monoespaçado (mais legível)
    var_dump($carros); // Exibe a estrutura completa do array $carros
    echo "<br><pre>";

    echo "<br><pre>";
    var_dump($informacoes); // Exibe toda a estrutura do array multidimensional
    echo "<br><pre>";

    // Aqui acessamos um valor dentro do array multidimensional:
    // $informacoes["Alessandro"]["carros"]
    // → entra na chave "Alessandro", depois acessa a subchave "carros"
    echo "<br><pre>";
    var_dump($informacoes["Alessandro"]["carros"]); // Exibe o número de carros de Alessandro
    echo "<br><pre>";
?>
