<?php
   // Importa o arquivo function.php
   // Ele contém a função exibirMensagem(), usada mais abaixo
   require 'function.php';
   
   // Variável para armazenar mensagens de erro
   // Começa como null (nenhuma mensagem)
   $erro = null;

   // Variável para armazenar mensagens de sucesso
   // Também começa vazia
   $sucesso = null;
   
   // Array INDEXADO
   // As chaves são numéricas (0, 1, 2, ...)
   // Cada posição contém apenas uma string
   $tecnologias = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP', 'REACT NATIVE', 'BOOTSTRAP'];

   // Array MULTIDIMENSIONAL ASSOCIATIVO
   // É um array que contém vários arrays internos
   // Cada array interno representa uma tecnologia
   $tecnologias_banco = [
        [
            'código'=> 'html', // valor interno (ex: para banco ou backend)
            'nome' => 'HTML'   // texto que será exibido ao usuário
        ],
        [
            'código'=> 'css', 
            'nome' => 'CSS'
        ],
        [
            'código'=> 'javascript', 
            'nome' => 'JAVASCRIPT'
        ],
        [
            'código'=> 'php', 
            'nome'=> 'PHP'
        ],
        [
            'código'=> 'rn', 
            'nome'=>'REACT NATIVE'
        ],
        [
            'código'=> 'bootstrap', 
            'nome'=> 'BOOTSTRAP'
        ]
   ];
   
   // Array ASSOCIATIVO
   // A chave funciona como o "código"
   // O valor funciona como o "nome"
   $tecnologias_api = [
        'html'=> 'HTML',
        'css'=> 'CSS',
        'javascript' => 'JAVASCRIPT',
        'php' => 'PHP',
        'rn' => 'REACT NATIVE',
        'bootstrap' => 'BOOTSTRAP'
   ];

   // Código comentado apenas para teste
   // Ele verificaria se o formulário foi enviado
   // e exibiria o valor selecionado no primeiro select
//    if($_SERVER['REQUEST_METHOD'] == 'POST'){
//         $opcao = $_POST['opcao'];
//         echo $opcao;
//    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Define o conjunto de caracteres -->
    <meta charset="UTF-8">

    <!-- Garante responsividade em dispositivos móveis -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulário com select</title>
</head>
<body>
    <h1>Formulário com select</h1>
    
    <!-- Exibe mensagem de erro, se existir e se o formulário foi enviado -->
    <?php if(exibirMensagem($erro)) : ?>
        <p style="color:red">
            <?= $erro; ?>
        </p>
    <?php endif; ?>

    <!-- Exibe mensagem de sucesso, se existir e se o formulário foi enviado -->
    <?php if(exibirMensagem($sucesso)) : ?>
        <p style="color:green">
            <?=  $sucesso; ?>
        </p>
    <?php endif; ?>

    <!-- Início do formulário -->
    <!-- method="POST" indica que os dados serão enviados via POST -->
    <form method="POST">

        <!-- SELECT baseado em ARRAY INDEXADO -->
        <label for="opcao"><strong>Array indexado:</strong></label>
        <select name="opcao"> 
            <?php foreach ($tecnologias as $tecnologia): ?>
                <!-- Cada item do array vira uma opção -->
                <!-- value e texto exibido são iguais -->
                <option value="<?= $tecnologia ?>">
                    <?= $tecnologia ?>
                </option>
            <?php endforeach; ?>
        </select>

        <br><br>

        <!-- SELECT baseado em ARRAY MULTIDIMENSIONAL ASSOCIATIVO -->
        <label for="opcaoBanco"><strong>Array multidimensional associativo:</strong></label>
        <select name="opcaoBanco">
            <?php foreach ($tecnologias_banco as $tecnologia): ?>
                <!-- value recebe o código -->
                <!-- texto exibido recebe o nome -->
                <option value="<?= $tecnologia['código'] ?>">
                    <?= $tecnologia['nome'] ?>
                </option>
            <?php endforeach; ?>        
        </select>

        <br><br>

        <!-- SELECT baseado em ARRAY ASSOCIATIVO -->
        <label for="opcaoAPI"><strong>Array associativo</strong></label>
        <select name="opcaoApi">
            <?php foreach($tecnologias_api as $chave => $tecnologia): ?>
                <!-- chave vira o value -->
                <!-- valor vira o texto exibido -->
                <option value="<?= $chave ?>">
                    <?= $tecnologia ?>
                </option>
            <?php endforeach; ?>
        </select>

        <br><br>

        <!-- Botão para enviar o formulário -->
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
