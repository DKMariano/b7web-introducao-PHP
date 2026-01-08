<?php
   // Inclui o arquivo que contém funções auxiliares
   require 'function.php';
   
   // Variável que armazenará a mensagem de erro (caso exista)
   $erro = null;

   // Variável que armazenará a mensagem de sucesso (caso exista)
   $sucesso = null;

   // Verifica se o formulário foi enviado via método POST
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // Recebe o valor digitado no input chamado "texto"
        $texto = $_POST['texto'];

        // --- SANITIZAÇÃO ---

        // Converte caracteres especiais em entidades HTML
        // Isso ajuda a evitar problemas de segurança (ex: XSS)
        $texto = htmlspecialchars($texto);
        
        // Remove espaços em branco antes e depois do texto
        // Exemplo: "  email@teste.com  " vira "email@teste.com"
        $texto = trim($texto);

        // --- VALIDAÇÕES ---

        // Primeira validação:
        // Verifica se o campo está vazio
        if(empty($texto)){
            $erro = "O campo texto é obrigatório.";

        // Segunda validação:
        // Verifica se o valor informado é um e-mail válido
        } elseif(filter_var($texto, FILTER_VALIDATE_EMAIL) === false){
            $erro = 'E-mail inválido.';

        // Terceira validação:
        // Verifica se o texto possui pelo menos 5 caracteres
        } elseif(strlen($texto) < 5){
            $erro = "O texto tem que ter, pelo menos, 5 carcateres.";

        // Quarta validação:
        // Verifica se o texto ultrapassa 100 caracteres
        } elseif(strlen($texto) > 100){
            $erro = 'O texto tem que ter, no máximo, 100 caracteres.';

        // Se todas as validações passarem
        } else{
            $sucesso = 'Campo validado com sucesso';
        }
   }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!-- Define o comportamento responsivo da página -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Formulário</h1>
    
    <!-- Exibe a mensagem de erro, se existir -->
    <?php if(exibirMensagem($erro)) : ?>
        <p style="color:red">
            <?= $erro; ?>
        </p>
    <?php endif; ?>

    <!-- Exibe a mensagem de sucesso, se existir -->
    <?php if(exibirMensagem($sucesso)) : ?>
        <p style="color:green">
            <?= $sucesso; ?>
        </p>
    <?php endif; ?>

    <!-- Formulário enviado via método POST -->
    <form method="POST">
        <!-- Campo de texto que será enviado ao PHP -->
        <input type="text" name="texto" placeholder="Digite o texto" />

        <!-- Botão para enviar o formulário -->
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
