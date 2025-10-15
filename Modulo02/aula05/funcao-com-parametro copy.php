<?php
// -----------------------------------------------------
// EXEMPLO 1: Função simples com parâmetro obrigatório
// -----------------------------------------------------

// Define uma função chamada 'saudacao' que recebe um parâmetro ($nome)
function saudacao($nome)
{
    // Retorna uma string com uma saudação personalizada
    return "<br>Olá, $nome<br>";
}

// Chama a função 'saudacao' passando o nome "Fulano" e guarda o retorno na variável $teste
$teste = saudacao("Fulano");

// Exibe o resultado retornado pela função
echo $teste;


// -----------------------------------------------------
// EXEMPLO 2: Função com parâmetro opcional (valor padrão)
// -----------------------------------------------------

// Define a função 'somar' com três parâmetros. 
// O terceiro ($num3) é opcional e tem valor padrão 0 caso não seja informado.
function somar($num1, $num2, $num3 = 0) 
{
    // Retorna uma string mostrando os três valores recebidos
    return "<br>Número 1: $num1, Numero2: $num2, Numero3: $num3 <br>";
}

// Chama a função sem informar o terceiro parâmetro (usa o valor padrão 0)
echo somar(100, 200);


// -----------------------------------------------------
// EXEMPLO 3: Função com parâmetro opcional e verificação condicional
// -----------------------------------------------------

// Define a função 'somar2' com o terceiro parâmetro sendo opcional (valor padrão null)
function somar2($num1, $num2, $num3 = null) {
    // Se $num3 tiver algum valor (não for null, 0, false, etc.)
    if($num3){
        // Exibe todos os três números
        return "<br>Número 1: $num1, Numero2: $num2, Numero3: $num3<br>";
    }else{
        // Caso contrário, exibe apenas os dois primeiros
        return "<br>Número 1: $num1, Numero2: $num2<br>";
    }
}

// Chamada da função com o terceiro parâmetro informado
echo somar2(100, 200, 100);


// -----------------------------------------------------
// EXEMPLO 4: Funções que interagem entre si
// -----------------------------------------------------

// Função que calcula a idade de uma pessoa a partir do ano de nascimento
function verificaIdade($anoNascimento){
    // Obtém o ano atual do sistema e converte para inteiro
    $anoAtual = (int) date('Y'); 
    // Calcula a idade
    $idade = $anoAtual - $anoNascimento;
    // Retorna o valor da idade
    return $idade;
}

// Função que determina se a pessoa pode entrar na balada
function portaoDeBalada ($anoNascimento, $acompanhado = false){
    // Define a idade mínima para entrar
    $idadeParaEntrarNaBalada = 18;
    // Chama a função anterior para calcular a idade
    $idade = verificaIdade($anoNascimento);

    // Estrutura condicional para avaliar os casos
    if($idade >= $idadeParaEntrarNaBalada){
        return '<br>Pode entrar na balada.<br>';
    }elseif ($idade < $idadeParaEntrarNaBalada && $acompanhado){
        return '<br>Pode entrar na balada com seu acompanhante.<br>';
    } else{
        return '<br>Você não pode entrar na balada<br>';
    }
}

// Chamadas da função com diferentes combinações de parâmetros
echo "<br>1994 sem acompanhante: ". portaoDeBalada(1994);
echo "<br>1999 com acompanhante: ". portaoDeBalada(1999, true);
echo "<br>2014 com acompanhante: ". portaoDeBalada(2014, true);
echo "<br>2015 sem acompanhante: ". portaoDeBalada(2015, false);
echo "<br>2011 sem acompanhante: ". portaoDeBalada(2011);


// -----------------------------------------------------
// EXEMPLO 5: Documentação de funções (PHPDoc)
// -----------------------------------------------------

/**
 * Gera uma string de saudação
 * 
 * @param string $nome Nome da pessoa
 * @param string $sobrenome Sobrenome da pessoa
 * @param int $idade Idade da pessoa
 * @return string Saudação completa
 * 
 * → Esse tipo de bloco de comentário é usado em documentação automática (PHPDoc)
 *   e ajuda IDEs (como VSCode) a sugerirem autocompletar e tipos corretos.
 */
function parametrosNomeados(string $nome, string $sobrenome, int $idade): string{
    return "<br>Olá, $nome $sobrenome. Você tem $idade anos.<br>";
}

// Chamadas com parâmetros nomeados (recurso introduzido no PHP 8)
echo parametrosNomeados( nome: "Fulano", sobrenome: "de Tal", idade: 34);
echo parametrosNomeados(idade: 34, sobrenome: "de Tal", nome: "Fulano");


// -----------------------------------------------------
// EXEMPLO 6: Função matemática com tipagem explícita
// -----------------------------------------------------

/**
 * Subtrai dois números
 * 
 * @param float $n1 Minuendo (número do qual será subtraído outro)
 * @param float $n2 Subtraendo (número que será subtraído)
 * @return float Diferença entre os dois números
 */
function subtrair (float $n1, float $n2): float{
    return $n1 - $n2;
}

// Chamada usando parâmetros nomeados (a ordem pode ser trocada)
echo "<br>";
echo subtrair(n2: 10, n1: 20);

?>
