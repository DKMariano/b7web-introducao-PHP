<?php

// ================================================
// 🔸 CABEÇALHO VISUAL (Separadores com <hr> e <br>)
// ================================================

// <hr> cria uma linha horizontal no navegador
// <br> quebra de linha (line break)
echo "<hr><br>";
echo "FLOAT"; // título da seção
echo "<br><br><hr>";


// ================================================
// 🔸 DECLARAÇÃO DE VARIÁVEIS DO TIPO FLOAT
// ================================================

// Float são números com casas decimais (ex: 1.5, 2.75, etc.)
$altura = 1.0;   // Altura como número decimal (float)

// Dois números decimais para testar operações matemáticas
$num1 = 1.10;
$num2 = 2.50;


// ================================================
// 🔸 OPERAÇÕES ARITMÉTICAS COM FLOAT
// ================================================

// Multiplicação
echo 'Multiplicação: ' . ($num1 * $num2);
echo '<br />';

// Adição
echo 'Adição: ' . ($num1 + $num2);
echo '<br />';

// Subtração
echo 'Subtração: ' . ($num1 - $num2);
echo '<br />';

// Divisão
echo 'Divisão: ' . ($num1 / $num2);
echo '<br />';


// ================================================
// 🔸 ARREDONDAMENTO DE NÚMEROS
// ================================================

echo '<br />';
echo "Arredondamento";
echo '<br />';

// Criamos uma nova variável com valor decimal
$num3 = 2.50;

// Mostra o valor original
echo "Número: $num3";
echo '<br />';

// --- round() ---
// Arredonda para o inteiro mais próximo.
// Exemplo: 2.4 → 2 | 2.6 → 3 | 2.5 → arredonda para cima (3)
echo 'Arredondamento com round(): ' . round($num3);
echo '<br />';

// --- floor() ---
// Arredonda sempre para baixo (para o menor inteiro).
// Exemplo: 2.9 → 2 | 2.1 → 2 | 2.5 → 2
echo 'Arredondamento com floor(): ' . floor($num3);
echo '<br />';

// --- ceil() ---
// Arredonda sempre para cima (para o próximo inteiro).
// Exemplo: 2.1 → 3 | 2.5 → 3 | 2.9 → 3
$numeroArredondadoParaCima = ceil($num3);
echo 'Arredondamento com ceil(): ' . $numeroArredondadoParaCima;
echo "<br><hr>";

?>
