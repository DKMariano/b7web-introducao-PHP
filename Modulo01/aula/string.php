<?php

// ================================================
// 🔸 CONCATENAÇÃO E INTERPOLAÇÃO DE STRINGS
// ================================================

// Declara duas variáveis do tipo string
$nome = 'José';
$sobrenome = 'Kobs';

// Conta o número de caracteres da string armazenada em $nome
// strlen() → retorna o tamanho da string (sem contar acentos como dois caracteres)
$numeroCaracteres = strlen($nome);

// Exibe o nome
echo $nome;
echo "<hr> <br>";

// Concatenação com ponto (.) → une strings manualmente
echo $nome . ' ' . $sobrenome;
echo "<hr> <br>";

// Interpolação → dentro de aspas duplas o PHP reconhece variáveis automaticamente
echo "Meu nome é $nome";
echo "<hr> <br>";

// Exemplo com interpolação e variável numérica
echo "Seu nome é $nome, ele tem $numeroCaracteres caracteres";
echo "<hr> <br>";


// ================================================
// 🔸 ANÁLISE E EXTRAÇÃO DE TEXTO
// ================================================

// Cria uma nova string mais longa
$texto = 'Pera, uva, maçã e salada mista';

// Conta o número total de caracteres da string completa
$numeroCaracteres = strlen($texto);

// Conta o número de caracteres de palavras específicas
$caracteresPalavraPera = strlen("Pera");
$caracteresPalavraUva = strlen("uva");
$caracteresPalavraSalada = strlen("salada");

// ================================================
// 🔸 POSIÇÕES DAS PALAVRAS DENTRO DA STRING
// ================================================
// strpos($texto, "palavra") retorna o índice (posição inicial) da palavra na string.
// O primeiro caractere da string tem posição 0.
$posicaoPalavraPera = strpos($texto, "Pera");
$posicaoPalavraUva = strpos($texto, "uva");
$posicaoPalavraSalada = strpos($texto, "salada");

// ================================================
// 🔸 EXTRAÇÃO DE SUBSTRINGS
// ================================================
// substr($texto, início, quantidade) → recorta um pedaço da string

// Exemplo simples: recorta 4 caracteres a partir da posição 6
$parteDaString = substr($texto, 6, 4); // Deve resultar em "uva,"

// Extrai cada palavra com base em sua posição e comprimento
$palavraPera = substr($texto, $posicaoPalavraPera, $caracteresPalavraPera);
$palavraUva = substr($texto, $posicaoPalavraUva, $caracteresPalavraUva);

// ⚠️ Aqui havia um pequeno erro no seu código original:
// Você usava `$posicaoPalavraSalada` como o comprimento.
// O correto é usar `$caracteresPalavraSalada` (número de letras).
$palavraSalada = substr($texto, $posicaoPalavraSalada, $caracteresPalavraSalada);

// ================================================
// 🔸 EXIBINDO RESULTADOS
// ================================================

echo $palavraPera;
echo "<hr> <br>";

echo $palavraUva;
echo "<hr> <br>";

echo $palavraSalada;

?>
