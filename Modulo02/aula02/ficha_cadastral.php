<?php
// Inclui os arquivos com as constantes e os dados.
// 'require_once' garante que o arquivo será importado apenas uma vez.
require_once 'constants.php';
require_once 'data.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- Importa o arquivo CSS -->
    <title>Explorando Variáveis em PHP</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>Ficha Cadastral</h1>
            <p>Nome: <strong><?= $nome; ?></strong></p>
            <p>Idade: <strong><?= $idade; ?></strong></p>
            <p>Sexo: <strong><?= $sexo; ?></strong></p>

            <!-- number_format formata o número com 2 casas decimais e separadores brasileiros -->
            <p>Salário Mensal: R$ 
                <strong><?= number_format($salarioMensal, 2, ",", ".") ?></strong>
            </p>

            <p>Salário Anual: R$ 
                <strong><?= number_format($salarioAnual, 2, ",", ".") ?></strong>
            </p>

            <p>Status de Emprego: 
                <strong><?= $statusEmprego; ?></strong>
            </p>

            <p>Anos para Aposentadoria: 
                <strong><?= $aposentadoria; ?></strong>
            </p>

            <!-- implode transforma o array em uma string separada por vírgulas -->
            <p>Habilidades: 
                <strong><?= implode(", ", $habilidades) ?></strong>
            </p>
        </div>
    </div>
</body>
</html>

