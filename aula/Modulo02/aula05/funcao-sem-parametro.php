<?php
// ======================================================
// Exemplo de funções em PHP — diferença entre echo e return
// ======================================================

// Função 1: imprime diretamente um texto na tela
function saudacao() {
    // A função usa echo, portanto ela exibe o texto imediatamente
    echo "<br>Olá, mundo<br>";
}

// Chamada da função 'saudacao'.
// Como ela tem echo dentro, o texto é impresso assim que a função é executada.
saudacao();


// Função 2: retorna o texto, mas não o imprime automaticamente
function saudacao2() {
    // 'return' envia o valor de volta para quem chamou a função,
    // mas NÃO o exibe na tela.
    return "<br>Olá, mundo<br>";
}

// Aqui a função é chamada, mas o retorno não é exibido,
// pois não usamos echo. O valor retornado é "perdido".
saudacao2(); // não imprime nada

// Aqui usamos echo para exibir o valor retornado pela função.
// Agora o texto aparece na tela.
echo saudacao2();


// ======================================================
// Diferença entre função que imprime e função que retorna
// ======================================================

// Chama 'saudacao()' e armazena o "resultado" em $x
$x = saudacao(); 
// Apesar de a função imprimir algo, ela não retorna nada.
// Portanto, o valor armazenado em $x é NULL.
echo "<br><pre>";
var_dump($x); // Mostra o tipo e valor da variável ($x = NULL)


// Agora, chama 'saudacao2()', que usa return
$x = saudacao2();
// Aqui, a função devolve o texto "<br>Olá, mundo<br>",
// e esse valor é guardado dentro de $x.
echo "<br><pre>";
var_dump($x); // Mostra que $x contém uma string


// ======================================================
// Exemplo 3: função que retorna um número
// ======================================================
function retornaNumero() {
    // Retorna um número inteiro (int)
    return 3;
}

// Guarda o valor retornado (3) na variável $x
$x = retornaNumero();
echo "<br><pre>";
var_dump($x); // Exibe o tipo e valor: int(3)


// Usa o valor retornado dentro de uma expressão
// Aqui, 3 (retornado pela função) + 3 = 6
$x = retornaNumero() + 3;
echo "<br><pre>";
var_dump($x); // Exibe int(6)

// ======================================================
// CONCLUSÃO DIDÁTICA
// ======================================================
// 👉 echo → imprime algo imediatamente, mas não retorna nada (retorna NULL)
// 👉 return → devolve um valor para ser usado, mas não imprime na tela
// Você pode combinar ambos dependendo da sua necessidade.
// ======================================================

?>
