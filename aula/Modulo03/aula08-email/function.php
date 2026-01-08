<?php
   
    // Função responsável por decidir se uma mensagem
    // (erro ou sucesso) deve ser exibida na tela
    function exibirMensagem($mensagem){

        // Verifica duas condições:
        // 1) A mensagem não pode estar vazia
        // 2) O formulário deve ter sido enviado via POST
        if(!empty($mensagem) && $_SERVER['REQUEST_METHOD'] == 'POST'){
            return true;
        } else{
            return false;
        }
    }
?>
