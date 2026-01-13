<?php
   require 'function.php';
   
   $erro = null;
   $sucesso = null;

   if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $texto = $_POST['texto'];

        //Sanitização
        $texto = htmlspecialchars($texto);
        
        //Remover espaços antes e depois da palavra
        $texto = trim($texto);

        // só recebe e-mail válido
        $texto = filter_var($texto, FILTER_SANITIZE_EMAIL);

        // var_dump($texto);

        //Primeira validação = garantir que o texto o texto tenha um @abstract
        if(strpos($texto, '@') == false){
            $erro = 'O texto precisa ter um @';
        // Segunda validação - Se o campo está preenchido.
        }elseif(empty($texto)){
            $erro = "O campo texto é obrigatório.";
        //Terceira validação - quantidade mínima de catacteres
        } elseif(strlen($texto) < 5){
            $erro = "O texto tem que ter, pelo menos, 5 carcateres.";
        } elseif(strlen($texto) > 10){
            $erro = 'O texto tem que ter, no máximo, 100 caracteres.';
        } else{
            $sucesso = 'Campo  validado com sucesso';
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
        <input type="text" name="texto" placeholder="Digite o texto" />
    </form>
</body>
</html>