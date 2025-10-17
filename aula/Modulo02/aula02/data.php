<?php
// Cria variáveis que simulam informações de uma pessoa cadastrada em um sistema.

// Inclui os arquivos com as funções.
// 'require_once' garante que o arquivo será importado apenas uma vez.
require_once 'funcoes.php';

// Nome da pessoa
$nome = "João da Silva";

// Idade atual
$idade = 25;

// Sexo biológico informado
$sexo = "Masculino";

// Cálculo de quantos anos faltam para se aposentar.
// Usa o operador ternário (condição ? valor_se_verdadeiro : valor_se_falso).
// Se for "Masculino", usa a constante IDADE_APOSENTADORIA_MASCULINA, senão usa a feminina.
$aposentadoria = anosParaAposentar($sexo, $idade);

// Salário mensal atual
$salarioMensal = 2210.30;
$salarioMensalMonetario = converterNumeroReal($salarioMensal);
// Cálculo do salário anual (12 meses)
$salarioAnual = salarioAnual($salarioMensal);

// Indica se a pessoa está empregada (true = sim / false = não)
$estaEmpregado = true;

// Usa novamente o operador ternário para definir uma string baseada no valor booleano anterior
$statusEmprego = ($estaEmpregado === true)
    ? "Empregado"
    : "Desempregado";

// Cria um array com as principais habilidades da pessoa.
// Arrays em PHP podem ser criados com colchetes []
$habilidades = ['PHP', 'JavaScript', 'HTML', 'CSS'];
?>
