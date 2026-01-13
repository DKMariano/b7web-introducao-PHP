<?php
   
    // Função responsável por decidir se uma mensagem
    // (erro ou sucesso) deve ser exibida na tela
    function exibirMensagem($mensagem){

        // Verifica duas condições ao mesmo tempo:
        // 1) A mensagem NÃO pode estar vazia
        // 2) O formulário deve ter sido enviado via POST
        if(!empty($mensagem) && $_SERVER['REQUEST_METHOD'] == 'POST'){
            // Se as duas condições forem verdadeiras,
            // permite exibir a mensagem
            return true;
        } else{
            // Caso contrário, não exibe nada
            return false;
        }
    }
?>
