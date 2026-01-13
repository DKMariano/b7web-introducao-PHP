<?php
   
    // Função responsável por decidir se uma mensagem deve ser exibida
    function exibirMensagem($mensagem){

        // Verifica se a mensagem não está vazia
        // e se o formulário foi enviado via POST
        if(!empty($mensagem) && $_SERVER['REQUEST_METHOD']== 'POST'){
            return true; // Permite exibir a mensagem
        } else{
            return false; // Não exibe a mensagem
        }
    }

?>
