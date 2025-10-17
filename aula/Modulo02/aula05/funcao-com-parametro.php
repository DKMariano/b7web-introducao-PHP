<?php
// -----------------------------------------------------
// EXEMPLO 1: Função simples com parâmetro obrigatório
// -----------------------------------------------------

// Define uma função chamada 'saudacao'.
// Toda função serve para agrupar código que pode ser reutilizado várias vezes.
// Ela precisa ser "chamada" em algum momento para ser executada.
function saudacao($nome)
{
    // Retorna uma mensagem personalizada contendo o nome recebido como parâmetro.
    // O uso de "return" envia o resultado de volta para quem chamou a função.
    return "<br>Olá, $nome<br>";
}

// Aqui, chamamos a função e passamos o valor "Fulano" para o parâmetro $nome.
// O retorno da função é armazenado na variável $teste.
$teste = saudacao("Fulano");

// Mostra na tela o que foi retornado pela função.
echo $teste;


// -----------------------------------------------------
// EXEMPLO 2: Função com parâmetro opcional (valor padrão)
// -----------------------------------------------------

// Esta função recebe 3 parâmetros, mas o terceiro ($num3) tem um valor padrão (0).
// Isso significa que, se o programador não informar o terceiro valor ao chamar a função,
// o PHP automaticamente usará o valor 0.
function somar($num1, $num2, $num3 = 0) 
{
    // Apenas retorna uma string mostrando os números recebidos.
    // Note que aqui ainda não há uma soma real, apenas exibição dos valores.
    return "<br>Número 1: $num1, Numero2: $num2, Numero3: $num3 <br>";
}

// Chama a função informando apenas dois valores.
// O PHP vai usar o valor padrão (0) para o terceiro parâmetro.
echo somar(100, 200);


// -----------------------------------------------------
// EXEMPLO 3: Função com parâmetro opcional e verificação condicional
// -----------------------------------------------------

// Parecida com a anterior, mas aqui o valor padrão é "null" (nulo).
// Null significa “nenhum valor definido”.
function somar2($num1, $num2, $num3 = null) {
    // Se $num3 tiver algum valor (não for null, 0, false, etc.), entra neste bloco.
    if($num3){
        // Exibe todos os três números.
        return "<br>Número 1: $num1, Numero2: $num2, Numero3: $num3<br>";
    }else{
        // Caso contrário, exibe apenas dois números.
        return "<br>Número 1: $num1, Numero2: $num2<br>";
    }
}

// Chamada informando o terceiro parâmetro, então ele será exibido.
echo somar2(100, 200, 100);


// -----------------------------------------------------
// EXEMPLO 4: Funções que interagem entre si
// -----------------------------------------------------

// Cria uma função que calcula a idade de uma pessoa com base no ano de nascimento.
function verificaIdade($anoNascimento){
    // Obtém o ano atual do sistema usando a função date('Y').
    // (int) força a conversão do valor retornado (string) para número inteiro.
    $anoAtual = (int) date('Y'); 

    // Calcula a idade subtraindo o ano de nascimento do ano atual.
    $idade = $anoAtual - $anoNascimento;

    // Retorna a idade calculada.
    return $idade;
}

// Função que decide se a pessoa pode entrar na balada.
function portaoDeBalada ($anoNascimento, $acompanhado = false){
    // Define idade mínima para entrar.
    $idadeParaEntrarNaBalada = 18;

    // Chama a função anterior para descobrir a idade da pessoa.
    $idade = verificaIdade($anoNascimento);

    // Verifica as condições para liberar ou negar a entrada.
    if($idade >= $idadeParaEntrarNaBalada){
        // Caso tenha 18 anos ou mais.
        return '<br>Pode entrar na balada.<br>';
    }elseif ($idade < $idadeParaEntrarNaBalada && $acompanhado){
        // Caso tenha menos de 18, mas esteja acompanhado.
        return '<br>Pode entrar na balada com seu acompanhante.<br>';
    } else{
        // Caso contrário, não pode entrar.
        return '<br>Você não pode entrar na balada<br>';
    }
}

// Testes da função com diferentes valores e situações.
echo "<br>1994 sem acompanhante: ". portaoDeBalada(1994);
echo "<br>1999 com acompanhante: ". portaoDeBalada(1999, true);
echo "<br>2014 com acompanhante: ". portaoDeBalada(2014, true);
echo "<br>2015 sem acompanhante: ". portaoDeBalada(2015, false);
echo "<br>2011 sem acompanhante: ". portaoDeBalada(2011);


// -----------------------------------------------------
// EXEMPLO 5: Documentação de funções (PHPDoc)
// -----------------------------------------------------

/**
 * Gera uma string de saudação.
 * 
 * @param string $nome       Nome da pessoa.
 * @param string $sobrenome  Sobrenome da pessoa.
 * @param int    $idade      Idade da pessoa.
 * @return string            Saudação completa.
 * 
 * Observação:
 * Esse tipo de comentário é chamado de **PHPDoc**.
 * Ele serve para gerar documentação automática e ajuda IDEs a entenderem o tipo
 * de dado esperado em cada parâmetro e o tipo de retorno.
 */
function parametrosNomeados(string $nome, string $sobrenome, int $idade): string{
    // Monta e retorna a frase final.
    return "<br>Olá, $nome $sobrenome. Você tem $idade anos.<br>";
}

// A partir do PHP 8, é possível usar “parâmetros nomeados”.
// Isso permite passar os argumentos fora da ordem, desde que o nome do parâmetro seja especificado.
echo parametrosNomeados( nome: "Fulano", sobrenome: "de Tal", idade: 34);
echo parametrosNomeados(idade: 34, sobrenome: "de Tal", nome: "Fulano");


// -----------------------------------------------------
// EXEMPLO 6: Função matemática com tipagem explícita
// -----------------------------------------------------

/**
 * Subtrai dois números.
 * 
 * @param float $n1 Minuendo (número do qual será subtraído outro).
 * @param float $n2 Subtraendo (número que será subtraído).
 * @return float Diferença entre os dois números.
 * 
 * Note que o uso de `float` garante que a função só aceite números decimais
 * e sempre retorne um número decimal.
 */
function subtrair (float $n1, float $n2): float{
    // Retorna o resultado da subtração.
    return $n1 - $n2;
}

// Chamando com parâmetros nomeados (a ordem é irrelevante neste caso).
echo "<br>";
echo subtrair(n2: 10, n1: 20);


// -----------------------------------------------------
// EXEMPLO 7: Estrutura condicional "switch case"
// -----------------------------------------------------

// Função que retorna o nome do dia da semana com base no número informado.
function diaSemanaSwitch(int $dia): string {
    // Estrutura switch é usada quando há várias condições possíveis.
    // É mais limpa do que usar vários "if...elseif...else".
    switch ($dia) {
        case 1: return "<br>Segunda-feira<br>";
        case 2: return "<br>Terça-feira<br>";
        case 3: return "<br>Quarta-feira<br>";
        case 4: return "<br>Quinta-feira<br>";
        case 5: return "<br>Sexta-feira<br>";
        case 6: return "<br>Sábado<br>";
        case 7: return "<br>Domingo<br>";
        // O bloco 'default' é executado se nenhum dos casos anteriores for verdadeiro.
        default: return "<br>Dia inválido. Informe um número de 1 a 7.<br>";
    }
}

// Testes da função.
echo "<br>";
echo diaSemanaSwitch(1);   // Segunda-feira
echo "<br>";
echo diaSemanaSwitch(7);   // Domingo
echo "<br>";
echo diaSemanaSwitch(10);  // Dia inválido
?>
