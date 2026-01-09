<?php
   // Inclui o arquivo com funções auxiliares.
   // O require é usado porque o código depende desse arquivo para funcionar.
   require 'function.php';
   
   // Variável que armazenará mensagens de erro.
   // Começa como null porque inicialmente não há erro.
   $erro = null;

   // Variável que armazenará mensagens de sucesso.
   // Também começa como null.
   $sucesso = null;
   
   // Array indexado com as tecnologias que aparecerão no select do formulário.
   $tecnologias = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP', 'REACT NATIVE', 'BOOTSTRAP'];

   // Array com as opções consideradas válidas no backend.
   // Serve como uma "lista permitida" (whitelist).
   $opçoesValidas = ['JAVASCRIPT', 'PHP'];

   // Verifica se o formulário foi enviado usando o método POST
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        // Recupera a opção escolhida no formulário
        $opcao = $_POST['opcao'];
        
        // Verifica se a opção enviada NÃO está dentro das opções válidas
        if(!in_array($opcao, $opçoesValidas)){
            // Caso não esteja, define uma mensagem de erro
            $erro = "Não é linguagem de programação";
        }

   }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Define o conjunto de caracteres como UTF-8 -->
    <meta charset="UTF-8">

    <!-- Ajusta o layout para dispositivos móveis -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vulnerabilidade Parameter Tempering</title>
</head>
<body>

    <!-- Título principal da página -->
    <h1>Formulário (Vulnerabilidade Parameter Tempering)</h1>
    
    <!-- Verifica se existe mensagem de erro para exibir -->
    <?php if(exibirMensagem($erro)) : ?>
        <p style="color:red">
            <!-- Exibe o texto do erro -->
            <?= $erro; ?>
        </p>
    <?php endif; ?>

    <!-- Verifica se existe mensagem de sucesso para exibir -->
    <?php if(exibirMensagem($sucesso)) : ?>
        <p style="color:green">
            <!-- Exibe o texto de sucesso -->
            <?=  $sucesso; ?>
        </p>
    <?php endif; ?>

    <!-- Formulário que envia dados via POST -->
    <form method="POST">

        <!-- Rótulo do campo select -->
        <label for="opcao"><strong>Array indexado:</strong></label>

        <!-- Campo select que envia o valor escolhido -->
        <select name="opcao"> 

            <!-- Percorre o array de tecnologias -->
            <?php foreach ($tecnologias as $tecnologia): ?>

                <!-- Cria uma opção para cada tecnologia -->
                <option value="<?= $tecnologia ?>">
                    <?=  $tecnologia ?>
                </option>

            <?php endforeach; ?>
        </select>

        <br><br>

        <!-- Botão para enviar o formulário -->
        <input type="submit" value="Enviar">
    </form>

</body>
</html>
