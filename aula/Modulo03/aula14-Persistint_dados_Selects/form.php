<?php
   require 'function.php';
   
   $erro = null;

   $sucesso = null;
   
   $tecnologiaSelecionada = [];

   $tecnologias = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP', 'REACT NATIVE', 'BOOTSTRAP'];
   
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(empty($_POST['tecnologia'])){
            $erro = "Selecione uma tecnologia!";
        }

        $tecnologiaSelecionada = $_POST['tecnologia'] ?? [];

       if(count($tecnologiaSelecionada) != 1){
            $erro = "Selecione APENAS UMA tecnologia!"; 
       } elseif($tecnologiaSelecionada[0] != 'HTML'){
            $erro = "Você deve selecionar APENAS o HTML!";
       }else{
            $sucesso = "HTML SELECIONADO!!!!!";
       }

   }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persistinto dados de Selects e Checkboxes</title>
</head>
<body>
    <h1>Selecione APENAS o html</h1>
    
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
            <select name="tecnologia[]" multiplo>
                <?php foreach ($tecnologias as $tecnologia) : ?>
                    <option value="<?= $tecnologia ?>"
                    <?php if(in_array($tecnologia, $tecnologiaSelecionada)){
                        echo 'selected';
                    }?>>   
                    <?= $tecnologia ?>
                    </option>
                <?php endforeach; ?>
            </select>
      
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>