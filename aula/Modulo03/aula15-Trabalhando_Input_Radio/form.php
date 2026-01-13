<?php
   // Inclui o arquivo function.php, onde está definida a função exibirMensagem()
   // Sem esse require, a função não seria reconhecida neste arquivo
   require 'function.php';
   
   // Variável que irá armazenar mensagens de erro
   // Começa como null para indicar que não há erro inicialmente
   $erro = null;

   // Variável que irá armazenar mensagens de sucesso
   // Também começa como null
   $sucesso = null;

   // Verifica se o formulário foi enviado via método POST
   // Isso evita executar a lógica quando a página é acessada pela primeira vez
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        // Verifica se o campo honeypot foi preenchido
        // Esse campo deveria ficar vazio para usuários humanos
        // Se estiver preenchido, provavelmente é um robô
        if(!empty($_POST['honeypot'])){
            // Define a mensagem de erro caso um robô seja detectado
            $erro = 'Ops! Robô detectado!';
        }
   }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!-- Define o comportamento responsivo da página -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persistinto dados de Selects e Checkboxes</title>
</head>
<body>
    <h1>Trabalhando Input Radio</h1>
    
    <!-- Verifica se existe uma mensagem de erro para exibir -->
    <?php if(exibirMensagem($erro)) : ?>
        <p style="color:red">
            <?= $erro; ?>
        </p>
    <?php endif; ?>

    <!-- Verifica se existe uma mensagem de sucesso para exibir -->
    <?php if(exibirMensagem($sucesso)) : ?>
        <p style="color:green">
            <?=  $sucesso; ?>
        </p>
    <?php endif; ?>

    <!-- Formulário que envia os dados para esta mesma página usando POST -->
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

        <!-- Campo honeypot: invisível para o usuário, mas detectável por robôs -->
        <input type="hidden" name="honeypot" value="">

        <!-- Botão de envio do formulário -->
        <input type="submit" value="Enviar">
      
    </form>
</body>
</html>
