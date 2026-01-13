<?php
   // Inclui o arquivo function.php, onde está definida a função exibirMensagem()
   require 'function.php';
   
   // Variável que irá armazenar uma mensagem de erro (inicialmente vazia)
   $erro = null;

   // Variável que irá armazenar uma mensagem de sucesso (inicialmente vazia)
   $sucesso = null;
     
   // Verifica se o formulário foi enviado usando o método POST
   // Esse if será executado somente quando o usuário clicar em "Enviar"
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

       // Neste momento, não há nenhuma lógica aqui dentro
       // Normalmente, aqui entrariam validações e tratamento dos dados enviados
   }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!-- Define que a página será responsiva -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persistinto dados com Checkboxes</title>
</head>
<body>
    <h1>Selecione APENAS o html</h1>
    
    <?php if(exibirMensagem($erro)) : ?>
        <!-- Exibe a mensagem de erro em vermelho,
             somente se exibirMensagem retornar true -->
        <p style="color:red">
            <?= $erro; ?>
        </p>
    <?php endif; ?>

    <?php if(exibirMensagem($sucesso)) : ?>
        <!-- Exibe a mensagem de sucesso em verde,
             somente se exibirMensagem retornar true -->
        <p style="color:green">
            <?=  $sucesso; ?>
        </p>
    <?php endif; ?>

    <!-- Início do formulário -->
    <!-- method="POST" indica que os dados serão enviados via POST -->
    <form method="POST">

        <?php foreach($tecnologias as $tecnologia): ?>
            <!-- Exibe o nome da tecnologia -->
            <label for="tec1"> <?= $tecnologia; ?> </label>

            <!-- Checkbox para cada tecnologia -->
            <!-- name="tecnologia[]" cria um array no $_POST -->
            <input type="checkbox" name="tecnologia[]" value="<?= $tecnologia;?>"
                <?php
                    // Verifica se a tecnologia atual está dentro
                    // do array de tecnologias selecionadas
                    // Se estiver, adiciona o atributo 'checked'
                    if(in_array($tecnologia, $tecnologiaSelecionada)){
                        echo 'checked';
                    }
                ?>
            >
            <br>
        <?php endforeach;?>  

        <br>
        <!-- Botão para enviar o formulário -->
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
