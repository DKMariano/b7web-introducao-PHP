<?php
$nome = "João da Silva";
$idade = 25;
$sexo = "Masculino";
define("IDADE_APOSENTADORIA_MASCULINA", 65);
define("IDADE_APOSENTADORIA_FEMININA", 62);
$aposentadoria = ($sexo === "Masculino") ? IDADE_APOSENTADORIA_MASCULINA - $idade : IDADE_APOSENTADORIA_FEMININA - $idade;
$salarioMensal = 2210.30;
$salarioAnual = $salarioMensal * 12;
$estaEmpregado = true;
$statusEmprego = ($estaEmpregado === true) ? "Empregado" :  "Empregado";
$habilidades = ['PHP', 'JavaScript', 'HTML', 'CSS'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorando Variáveis em PHP</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
            font-size: 1.1em;
        }

        strong {
            color: #000;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Ficha Cadastral</h1>
            <p>Nome: <strong><?= $nome;?></strong></p>
            <p>Idade: <strong><?= $idade;?></strong></p>
            <p>Sexo: <strong><?= $sexo;?></strong></p>
            <p>Salário Mensal: R$ <strong> <?= number_format($salarioMensal, 2, ",", ".")?> </strong></p>
            <p>Salário Anual: R$ <strong> <?= number_format($salarioAnual, 2, ",",".")?> </strong></p>
            <p>Status de Emprego: <strong> <?= $statusEmprego; ?> </strong></p>
            <p>Anos para Aposentadoria: <strong> <?= $aposentadoria; ?> </strong></p>
            <p>Habilidades: <strong><?= implode(", ", $habilidades)?></strong></p>
        </div>
    </div>
</body>

</html>