<?php
   require 'function.php';
   
   $erro = null;

   $sucesso = null;
   
   $tecnologias = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP', 'REACT NATIVE', 'BOOTSTRAP'];

   $opçoesValidas = ['JAVASCRIPT', 'PHP'];

   if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $opcao = $_POST['opcao'];
        
        if(!in_array($opcao, $opçoesValidas)){
            $erro = "Não é linguagem de programação";
        }

   }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Formulário</h1>
    
    <?php if(exibirMensagem($erro)) : ?>
        <p style="color:red">
            <?= $erro; ?>
        </p>
    <?php endif; ?>
    <?php if(exibirMensagem($sucesso)) : ?>
        <p style = "color:green">
            <?=  $sucesso; ?>
        </p>
    <?php endif; ?>

    <form method="POST">
        <label for="opcao"><strong>Array indexado:</strong></label>
        <select name="opcao"> 
            <?php foreach ($tecnologias as $tecnologia): ?>
                <option value="<?= $tecnologia ?>"><?=  $tecnologia ?></option>
            <?php endforeach; ?>
        </select>

        <br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>