<?php
// Inclui os arquivos com as constantes e os dados.
// 'require_once' garante que o arquivo será importado apenas uma vez.
require_once 'constants.php';
require_once 'data.php';

/**
 * Calcula o salário Anual baseado no salário mensal
 * @param float $salarioMensal Salario Mensal
 * @return string Salario Anual
 */
function salarioAnual(float $salarioMensal): string{
    $tercoDeFerias = $salarioMensal / 3;
    $salarioAnual = ($salarioMensal *13) + $tercoDeFerias;
    return converterNumeroReal($salarioAnual);
}

/**
 * Calcula a quantidade de anos que falta para alguém se aposentar
 * @param int $idade Idade da pessoa
 * @param string $sexo Sexo da pessoa
 * @return int Quanridade de anos que falta para aposentar
 */
function anosParaAposentar(string $sexo, int $idade): int {
    if ($sexo === "Masculino") {
        return IDADE_APOSENTADORIA_MASCULINA - $idade;
    }else{
        return IDADE_APOSENTADORIA_FEMININA - $idade;
    }
}
    
/**
 * Recebe um valor numerico e retorna um valor monetário
 * @param float $number Valor numérico
 * @return string Valor monetário
 */
function converterNumeroReal (float $numero): string{
    return number_format($numero, 2, ',', '.');
}

?>