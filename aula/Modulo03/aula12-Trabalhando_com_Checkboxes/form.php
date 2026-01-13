<?php
   // Inclui o arquivo function.php, onde está definida a função exibirMensagem()
   require 'function.php';
   
   // Variável para armazenar mensagens de erro
   $erro = null;

   // Variável para armazenar mensagens de sucesso
   $sucesso = null;
   
   // Array com as tecnologias que serão exibidas como checkboxes no formulário
   $tecnologias = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP', 'REACT NATIVE', 'BOOTSTRAP'];
   
   // Verifica se o formulário foi enviado usando o método POST
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // Verifica se o campo 'tecnologia' está vazio ou não foi enviado
        if(empty($_POST['tecnologia'])){
            // Caso nenhuma tecnologia seja selecionada, define a mensagem de erro
            $erro = "Selecione uma tecnologia!";
        }

        // Tenta recuperar os dados enviados pelo checkbox 'tecnlogia'
        // Caso não exista, atribui um array vazio
        $tecnologia = $_POST['tecnlogia'] ?? [];

        // Exibe na tela o conteúdo da variável para fins de depuração (debug)
        var_dump($tecnologia);
   }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Define a codificação de caracteres como UTF-8 -->
    <meta charset="UTF-8">

    <!-- Ajusta o layout para dispositivos móveis -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulário com Checkbox</title>
</head>
<body>
    <h1>Formulário com Checkbox<</h1>
    
    <!-- Exibe a mensagem de erro somente se a função retornar true -->
    <?php if(exibirMensagem($erro)) : ?>
        <p style="color:red">
            <?= $erro; ?>
        </p>
    <?php endif; ?>

    <!-- Exibe a mensagem de sucesso somente se a função retornar true -->
    <?php if(exibirMensagem($sucesso)) : ?>
        <p style="color:green">
            <?=  $sucesso; ?>
        </p>
    <?php endif; ?>

    <!-- Formulário enviado via método POST -->
    <form method="POST">

        <!-- Percorre o array de tecnologias para criar os checkboxes dinamicamente -->
        <?php foreach($tecnologias as $tecnologia): ?>

            <!-- Rótulo do checkbox -->
            <label for="tec1"> <?= $tecnologia; ?> </label>

            <!-- Checkbox que envia os valores como um array (tecnologia[]) -->
            <input type="checkbox" name="tecnologia[]" value="<?= $tecnologia;?>">
            <br>

        <?php endforeach;?>       

        <!-- Checkbox extra, apenas para teste -->
        <label for="teste">Teste</label>
        <input type="checkbox" name="teste[]" value="teste123">
        <br>

        <!-- Botão para enviar o formulário -->
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
