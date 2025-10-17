<?php
    // ================================================
    // 🔸 CRIAÇÃO DE ARRAY SIMPLES
    // ================================================

    // Criamos um array com duas frutas.
    $frutas = ["Laranja", "Limão"];

    // Exibe a estrutura inicial do array.
    echo "<br><pre>";
    var_dump($frutas); // Mostra que temos 2 itens (índices 0 e 1)

    // ================================================
    // 🔸 ADICIONAR ELEMENTOS AO FINAL (array_push)
    // ================================================

    // Adiciona o elemento "Uva" ao final do array.
    // array_push($array, valor) → Insere no final.
    array_push($frutas, "Uva");

    echo "<br><pre>";
    var_dump($frutas); // Agora temos ["Laranja", "Limão", "Uva"]

    // ================================================
    // 🔸 REMOVER O PRIMEIRO ELEMENTO (array_shift)
    // ================================================

    // Remove o primeiro elemento do array ("Laranja").
    // Os índices são reorganizados automaticamente.
    array_shift($frutas);

    echo "<br><pre>";  
    var_dump($frutas); // Resultado: ["Limão", "Uva"]

    // ================================================
    // 🔸 REMOVER O ÚLTIMO ELEMENTO (array_pop)
    // ================================================

    // Remove o último elemento do array ("Uva").
    array_pop($frutas);

    echo "<br><pre>";  
    var_dump($frutas); // Agora temos apenas ["Limão"]

    // ================================================
    // 🔸 ALTERAR ELEMENTOS DIRETAMENTE
    // ================================================

    // Atribuímos "Morango" ao índice 1.
    // Obs: como só existe o índice 0 agora, o PHP cria automaticamente o índice 1.
    $frutas[1] = "Morango";

    echo "<br><pre>";  
    var_dump($frutas); // Resultado: [0 => "Limão", 1 => "Morango"]

    // Alteramos o item no índice 0, substituindo "Limão" por "Banana".
    $frutas[0] = "Banana";

    echo "<br><pre>";  
    var_dump($frutas); // Resultado: [0 => "Banana", 1 => "Morango"]

    // ================================================
    // 🔸 CONTAR ELEMENTOS (count)
    // ================================================

    // Conta quantos itens há no array.
    $quantidadeDeItens = count($frutas);

    echo "<br>Quantidade de frutas: " . $quantidadeDeItens;  // Deve exibir "2"
    echo "<br><pre>";  
    var_dump($frutas);

    // ================================================
    // 🔸 VERIFICAR SE UM VALOR EXISTE (in_array)
    // ================================================

    // Verifica se "Banana" existe no array.
    // Retorna true (1) ou false (vazio).
    $temBanana = in_array("Banana", $frutas);

    echo "<br>Tem banana: " . $temBanana;  // Exibe "1" se verdadeiro.
    echo "<br>";  
    var_dump($temBanana); // Mostra o tipo boolean (bool(true))

    // Verifica se "Laranja" ainda existe no array.
    $temLaranja = in_array("Laranja", $frutas);

    echo "<br>Tem laranja: " . $temLaranja;  
    echo "<br>";  
    var_dump($temLaranja); // Mostra bool(false)

    // ================================================
    // 🔸 UNIR ARRAYS (array_merge)
    // ================================================

    // Criamos outro array simples.
    $frutas2 = ["Laranja", "Limão"];

    // Junta os dois arrays ($frutas + $frutas2), nessa ordem.
    // array_merge preserva a ordem dos elementos, mas reindexa os índices.
    $todasFrutas = array_merge($frutas, $frutas2);

    echo "<br><pre>";   
    var_dump($todasFrutas); 
    // Exemplo: ["Banana", "Morango", "Laranja", "Limão"]

    // Agora invertemos a ordem da fusão.
    $todasFrutas2 = array_merge($frutas2, $frutas);

    echo "<br><pre>";   
    var_dump($todasFrutas2); 
    // Exemplo: ["Laranja", "Limão", "Banana", "Morango"]
?>
