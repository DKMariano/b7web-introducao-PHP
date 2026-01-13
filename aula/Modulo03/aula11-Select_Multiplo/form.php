<?php
   // Inclui o arquivo de funções externas.
   // Aqui provavelmente está definida a função exibirMensagem()
   require 'function.php';
   
   // Variável que vai armazenar mensagens de erro
   // Começa como null porque ainda não houve validação
   $erro = null;

   // Variável que vai armazenar mensagem de sucesso
   $sucesso = null;
   
   // Array com todas as tecnologias que aparecerão no <select>
   $tecnologias = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP', 'REACT NATIVE', 'BOOTSTRAP'];

   // Array com as tecnologias consideradas válidas para a regra do formulário
   $opcoesValidas = ['JAVASCRIPT', 'PHP' ];
   
   // Verifica se o formulário foi enviado via método POST
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        // Recebe as opções selecionadas no <select multiple>
        // Como o name é "opcoes[]", isso chega como um array
        $opcoes = $_POST['opcoes'];

        // Verifica se a quantidade de opções selecionadas é diferente de 2
        // A regra exige exatamente duas opções
        if(count($opcoes) != 2){
            $erro = 'Selecione apenas duas tecnologias';
        }

        // Percorre cada opção selecionada pelo usuário
        foreach($opcoes as $opcao){

            // Verifica se a opção selecionada está dentro das opções válidas
            // in_array retorna true se encontrar o valor no array
            if(!in_array($opcao, $opcoesValidas)){
                // Caso encontre uma opção inválida, define o erro
                $erro = 'Selecione tecnologias válidas.';
                
                // Interrompe o loop, pois não precisa continuar verificando
                break;
            }
        }
        
        // Se a variável $erro estiver vazia,
        // significa que todas as validações passaram
        if(empty($erro)){
            $sucesso = 'Deu tudo certo';
        }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!-- Define comportamento responsivo em dispositivos móveis -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com Select Multiplo</title>
</head>
<body>

    <!-- Título da página -->
    <h1>Formulário com Select Multiplo</h1>
    
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

    <!-- Formulário enviado via POST -->
    <form method="POST">

        <!-- Label explicando o campo -->
        <label for="opcoes"><strong>Array indexado:</strong></label>

        <!-- Select com múltipla seleção -->
        <!-- O name="opcoes[]" indica que os dados chegarão como array no PHP -->
        <select name="opcoes[]" multiple> 
            
            <!-- Percorre o array de tecnologias -->
            <?php foreach ($tecnologias as $tecnologia): ?>
                
                <!-- Cada tecnologia vira uma opção do select -->
                <option value="<?= $tecnologia ?>">
                    <?= $tecnologia ?>
                </option>

            <?php endforeach; ?>
        </select>

        <br><br>

        <!-- Botão de envio do formulário -->
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
