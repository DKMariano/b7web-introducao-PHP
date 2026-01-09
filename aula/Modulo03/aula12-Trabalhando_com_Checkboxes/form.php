<?php
   require 'function.php';
   
   $erro = null;

   $sucesso = null;
   
   $tecnologias = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP', 'REACT NATIVE', 'BOOTSTRAP'];
   
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(empty($_POST['tecnologia'])){
            $erro = "Selecione uma tecnologia!";
        }

        $tecnologia = $_POST['tecnlogia'] ?? [];

        var_dump($tecnologia);
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
        <?php foreach($tecnologias as $tecnologia): ?>
            <label for="tec1"> <?= $tecnologia; ?> </label>
            <input type="checkbox" name="tecnologia[]" value="<?= $tecnologia;?>">
            <br>
        <?php endforeach;?>       
        <label for="teste">Teste</label>
        <input type="checkbox" name="teste[]" value="teste123">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>