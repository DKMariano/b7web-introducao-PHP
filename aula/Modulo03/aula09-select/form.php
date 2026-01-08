<?php
   require 'function.php';
   
   $erro = null;

   $sucesso = null;
   
   $tecnologias = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP', 'REACT NATIVE', 'BOOTSTRAP'];

   $tecnologias_banco = [
        [
            'código'=> 'html', 
            'nome' => 'HTML'
        ],
        [
            'código'=> 'css', 
            'nome' => 'CSS'
        ],
        [
            'código'=> 'javascript', 
            'nome' => 'JAVASCRIPT'],
        [
            'código'=> 'php', 
            'nome'=> 'PHP'],
        [
            'código'=> 'rn', 
            'nome'=>'REACT NATIVE'],
        [
            'código'=> 'bootstrap', 
            'nome'=> 'BOOTSTRAP']
   ];
   
   $tecnologias_api = [
        'html'=> 'HTML',
        'css'=> 'CSS',
        'javascript' => 'JAVASCRIPT',
        'php' => 'PHP',
        'rn' => 'REACT NATIVE',
        'bootstrap' => 'BOOTSTRAP'
   ];

//    if($_SERVER['REQUEST_METHOD'] == 'POST'){
//         $opcao = $_POST['opcao'];
//         echo $opcao;
//    }

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

        <label for="opcaoBanco"><strong>Array multidimensional associativo:</strong></label>
        <select name="opcaoBanco">
            <?php foreach ($tecnologias_banco as $tecnologia): ?>
                <option value="<?= $tecnologia['código'] ?>"><?= $tecnologia['nome']?></option>
            <?php endforeach; ?>        
        </select>

        <br><br>
        <label for="opcaoAPI"><strong>Array associativo</strong></label>
        <select name="opcaoApi">
            <?php foreach($tecnologias_api as $chave=>$tecnologia): ?>
                <option value="<?= $chave ?>"><?= $tecnologia ?></option>
            <?php endforeach; ?>
        </select>

        <br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>