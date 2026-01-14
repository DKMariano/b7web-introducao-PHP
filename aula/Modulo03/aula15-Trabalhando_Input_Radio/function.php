<?php
   
    // Função responsável por decidir se uma mensagem deve ser exibida ou não
    function exibirMensagem($mensagem){

        // Verifica duas condições:
        // 1) Se a mensagem não está vazia
        // 2) Se o formulário foi enviado via POST
        if(!empty($mensagem) && $_SERVER['REQUEST_METHOD'] == 'POST'){
            // Se as duas condições forem verdadeiras, retorna true
            return true;
        } else{
            // Caso contrário, retorna false
            return false;
        }
    }

?>
