<?php
   // Inclui o arquivo function.php.
   // O require é obrigatório: se o arquivo não existir, o PHP para a execução.
   require 'function.php';
   
   // Variável para armazenar mensagem de erro (inicia vazia)
   $erro = null;

   // Variável para armazenar mensagem de sucesso (inicia vazia)
   $sucesso = null;
   
   // Array que vai guardar as tecnologias selecionadas pelo usuário
   // Começa vazio para evitar erros
   $tecnologiaSelecionada = [];

   // Lista fixa de tecnologias que serão exibidas no select
   $tecnologias = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP', 'REACT NATIVE', 'BOOTSTRAP'];
   
   // Verifica se o formulário foi enviado via método POST
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // Verifica se o campo tecnologia veio vazio
        // Como o select usa name="tecnologia[]", o PHP recebe um array
        if(empty($_POST['tecnologia'])){
            $erro = "Selecione uma tecnologia!";
        }

        // Se existir POST['tecnologia'], usa ele
        // Caso contrário, usa um array vazio
        // Isso evita erro de índice inexistente
        $tecnologiaSelecionada = $_POST['tecnologia'] ?? [];

       // Verifica se a quantidade de tecnologias selecionadas é diferente de 1
       if(count($tecnologiaSelecionada) != 1){
            $erro = "Selecione APENAS UMA tecnologia!"; 
       
       // Se for exatamente uma, verifica se a tecnologia escolhida é HTML
       } elseif($tecnologiaSelecionada[0] != 'HTML'){
            $erro = "Você deve selecionar APENAS o HTML!";
       
       // Se passou por todas as validações, a escolha está correta
       }else{
            $sucesso = "HTML SELECIONADO!!!!!";
       }

   }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Define o conjunto de caracteres -->
    <meta charset="UTF-8">
    
    <!-- Ajusta o layout para dispositivos móveis -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Título da página -->
    <title>Persistinto dados de Selects</title>
</head>
<body>
    <h1>Selecione APENAS o html</h1>
    
    <!-- Exibe mensagem de erro, se existir -->
    <?php if(exibirMensagem($erro)) : ?>
        <p style="color:red">
            <?= $erro; ?>
        </p>
    <?php endif; ?>

    <!-- Exibe mensagem de sucesso, se existir -->
    <?php if(exibirMensagem($sucesso)) : ?>
        <p style="color:green">
            <?=  $sucesso; ?>
        </p>
    <?php endif; ?>

    <!-- Formulário enviado via POST -->
    <form method="POST">
        
            <!-- Select com múltipla seleção -->
            <!-- O nome com [] faz o PHP receber um array -->
            <select name="tecnologia[]" multiple>
                
                <!-- Percorre a lista de tecnologias -->
                <?php foreach ($tecnologias as $tecnologia) : ?>
                    
                    <!-- Cria uma opção para cada tecnologia -->
                    <option value="<?= $tecnologia ?>">
                    
                    <!-- Se a tecnologia estiver no array selecionado,
                         marca a opção como selected (persistência) -->
                    <?= in_array($tecnologia, $tecnologiaSelecionada) ? 'selected' : ''; ?>>
                        
                        <?= $tecnologia ?>
                    
                    </option>
                <?php endforeach; ?>
            </select>
      
        <br>
        <!-- Botão de envio do formulário -->
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
