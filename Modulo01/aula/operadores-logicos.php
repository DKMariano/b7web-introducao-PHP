<?php
// ============================================================
// 🧠 TEMA: Operadores Lógicos em PHP
// ------------------------------------------------------------
// Neste exemplo vamos entender o funcionamento dos operadores:
// && (E), || (OU) e ! (NÃO).
// ============================================================


// ------------------------------------------------------------
// 🔹 OPERADOR LÓGICO && (E)
// Retorna TRUE apenas se TODAS as condições forem verdadeiras.
// ------------------------------------------------------------

$idade = 18;               // Armazena a idade da pessoa
$temCarteira = true;       // Indica se a pessoa tem carteira de motorista

// Mostra os valores atuais na tela
echo "Idade = ".$idade."<br>Tem carteira = Verdadeiro<br>";

// Verifica se a pessoa tem 18 anos ou mais E tem carteira
if($idade >= 18 && $temCarteira){
    echo "Você pode dirigir no Brasil<br>";
}else{
    echo "Você NÃO PODE dirigir no Brasil<br>";
}

echo "<br>"; // quebra de linha visual

// 🧩 Novo exemplo
$idade = 36;
$temCarteira = false;
echo "Idade = ".$idade."<br>Tem carteira = Falso<br>";

// Aqui, apesar da idade ser suficiente, falta a carteira,
// então o resultado será FALSO (pois o E exige ambas verdadeiras)
if($idade >= 18 && $temCarteira){
    echo "Você pode dirigir no Brasil<br>";
}else{
    echo "Você NÃO PODE dirigir no Brasil<br>";
}


// ------------------------------------------------------------
// 🔹 OPERADOR LÓGICO || (OU)
// Retorna TRUE se PELO MENOS UMA das condições for verdadeira.
// ------------------------------------------------------------

echo "<br>";
$idade = 18;
$temCarteira = true;
echo "Idade = ".$idade."<br>Tem carteira = Verdadeiro<br>";

// Como as duas condições são verdadeiras, o resultado será verdadeiro.
if($idade >= 18 || $temCarteira){
    echo "Você pode dirigir no Brasil<br>";
}else{
    echo "Você NÃO PODE dirigir no Brasil<br>";
}

echo "<br>";
$idade = 18;
$temCarteira = false;
echo "Idade = ".$idade."<br>Tem carteira = Falso<br>";

// Aqui, mesmo sem carteira, a idade já é suficiente.
// Como o OU precisa de apenas uma condição verdadeira, o resultado é verdadeiro.
if($idade >= 18 || $temCarteira){
    echo "Você pode dirigir no Brasil<br>";
}else{
    echo "Você NÃO PODE dirigir no Brasil<br>";
}

echo "<br>";
$idade = 15;
$temCarteira = false;
echo "Idade = ".$idade."<br>Tem carteira = Falso<br>";

// Nesse caso, ambas são falsas (menor de idade e sem carteira).
// Resultado: FALSO.
if($idade >= 18 || $temCarteira){
    echo "Você pode dirigir no Brasil<br>";
}else{
    echo "Você NÃO PODE dirigir no Brasil<br>";
}


// ------------------------------------------------------------
// 🔹 OPERADOR LÓGICO ! (NÃO ou NEGAÇÃO)
// Inverte o valor lógico: se for TRUE vira FALSE e vice-versa.
// ------------------------------------------------------------

echo "<br>";
$temCarteira = true;
echo "<br>Tem carteira = Verdadeiro<br>";

// A negação (!) transforma TRUE em FALSE,
// então o if não é executado e vai para o else.
if(!$temCarteira){
    echo "Você pode dirigir no Brasil<br>";
}else{
    echo "Você NÃO PODE dirigir no Brasil<br>";
}

echo "<br>";
$temCarteira = false;
echo "<br>Tem carteira = Falso<br>";

// Aqui, FALSE se torna TRUE com o !,
// logo, o if será executado.
if(!$temCarteira){
    echo "Você pode dirigir no Brasil<br>";
}else{
    echo "Você NÃO PODE dirigir no Brasil<br>";
}


// ------------------------------------------------------------
// 🔹 Comparações com valores especiais (null e ===)
// ------------------------------------------------------------

echo "<br>";
$temCarteira = null; // Valor indefinido (nem verdadeiro nem falso)
echo "<br>Tem carteira = null<br>";

// == faz comparação "flexível", ou seja, null é tratado como false.
if($temCarteira == false){
    echo "Você pode dirigir no Brasil<br>";
}else{
    echo "Você NÃO PODE dirigir no Brasil<br>";
}

echo "<br>";
$temCarteira = null;
echo "<br>Tem carteira = null<br>";

// === faz comparação "estrita": exige mesmo tipo e mesmo valor.
// null === false → FALSO, pois são tipos diferentes.
if($temCarteira === false){
    echo "Você pode dirigir no Brasil<br>";
}else{
    echo "Você NÃO PODE dirigir no Brasil<br>";
}


// ------------------------------------------------------------
// 🔹 Exemplo com múltiplas verificações (if / elseif / else)
// ------------------------------------------------------------

echo "<br>";
$temCarteira = null;
echo "<br>Tem carteira = null<br>";

// Estrutura condicional completa:
// Verifica vários casos possíveis em sequência.
if($temCarteira === false){
   echo "Você NÃO PODE dirigir no Brasil<br>";
}elseif($temCarteira === true){
    echo "Você pode dirigir no Brasil<br>";
}else{
    echo "Eu não sei se você pode dirigir.<br>";
}


// ------------------------------------------------------------
// 🔹 Exemplo final com string
// ------------------------------------------------------------

echo "<br>";
$temCarteira = 'ppd'; // PPD = Permissão para Dirigir (carteira provisória)
echo "<br>Tem carteira = ppd<br>";

// Agora testamos mais uma possibilidade: valor textual.
if($temCarteira === false){
   echo "Você NÃO PODE dirigir no Brasil<br>";
}elseif($temCarteira === true){
    echo "Você pode dirigir no Brasil<br>";
}elseif($temCarteira === 'ppd'){
    echo "Você pode dirigir com cuidado<br>";
}else{
    echo "Eu não sei se você pode dirigir.<br>";
}

?>
