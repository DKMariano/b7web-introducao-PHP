<?php
   // Inclui o arquivo function.php, onde está definida a função exibirMensagem().
   // O require interrompe o script se o arquivo não for encontrado.
   require 'function.php';
   
   // Variável que armazenará mensagens de erro (inicialmente vazia).
   $erro = null;

   // Variável que armazenará mensagens de sucesso (inicialmente vazia).
   $sucesso = null;

   // Verifica se o formulário foi enviado utilizando o método POST.
   // Esse teste evita que o código rode quando a página é acessada pela primeira vez.
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // Verifica se o campo "honeypot" NÃO está vazio.
        // A ideia do honeypot é detectar robôs que preenchem todos os campos automaticamente.
        if(!empty($_POST['honeypot'])){
            // Se o honeypot estiver preenchido, define uma mensagem de erro.
            $erro = 'Ops! Robô detectado!';
        }

   }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!-- Define o comportamento responsivo da página em diferentes telas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persistinto dados de Selects e Checkboxes</title>
</head>
<body>
    <h1>Trabalhando Input Radio</h1>
    
    <!-- Verifica se existe uma mensagem de erro a ser exibida -->
    <?php if(exibirMensagem($erro)) : ?>
        <p style="color:red">
            <!-- Exibe o texto da mensagem de erro -->
            <?= $erro; ?>
        </p>
    <?php endif; ?>

    <!-- Verifica se existe uma mensagem de sucesso a ser exibida -->
    <?php if(exibirMensagem($sucesso)) : ?>
        <p style="color:green">
            <!-- Exibe o texto da mensagem de sucesso -->
            <?=  $sucesso; ?>
        </p>
    <?php endif; ?>

    <!-- Formulário enviado via método POST para a própria página -->
    <form method="POST">
        
        <!-- Campo para o nome do usuário -->
        <input type="text" name="nome" placeholder="Digite seu nome">
        <br>

        <!-- Campo para o e-mail do usuário -->
        <input type="text" name="email" placeholder="Digite seu e-mail">
        <br>

        <!-- Campo para a mensagem do usuário -->
        <input type="text" name="mensagem" placeholder="Digite sua mensagem">
        <br>

        <!-- Campo honeypot:
             Serve como armadilha para robôs.
             Usuários humanos não preenchem esse campo. -->
        <input type="hidden" name="honeypot" value="">

        <!-- Botão de envio do formulário -->
        <input type="submit" value="Enviar">
      
    </form>
</body>
</html>
