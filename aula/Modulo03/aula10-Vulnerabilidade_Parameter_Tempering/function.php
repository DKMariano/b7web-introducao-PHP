<?php
   
    function exibirMensagem($mensagem){
        if(!empty($mensagem) && $_SERVER['REQUEST_METHOD']== 'POST'){
            return true;
        } else{
            return false;
        }
    }


?>