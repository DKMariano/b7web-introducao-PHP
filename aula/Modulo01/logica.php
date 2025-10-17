<?php

// ================================================
// 🔸 VARIÁVEL BOOLEAN (verdadeiro ou falso)
// ================================================

// Cria uma variável booleana (true = verdadeiro)
// Em PHP, valores booleanos só podem ser:
// true (verdadeiro) ou false (falso)
$estaEstudando = true;

// var_dump() mostra o tipo e o valor da variável.
// Aqui mostrará: bool(true)
var_dump($estaEstudando);
echo "<br>";


// ================================================
// 🔸 NEGAÇÃO LÓGICA (!)
// ================================================

// O operador "!" inverte o valor booleano:
// true vira false, e false vira true.
// Nesse caso, $estaEstudando era true, então agora passa a ser false.
$estaEstudando = !$estaEstudando;

// Mostra novamente o valor invertido (bool(false))
var_dump($estaEstudando);
echo "<br>";


// ================================================
// 🔸 ESTRUTURA CONDICIONAL (if / else)
// ================================================

// O if testa se a condição entre parênteses é verdadeira.
// Se for true → executa o bloco do if.
// Se for false → executa o bloco do else.
if ($estaEstudando) {
    echo "Parabéns";  // Executa se $estaEstudando == true
} else {
    echo "Vá estudar"; // Executa se $estaEstudando == false
}

?>



?>