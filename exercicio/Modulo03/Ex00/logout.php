<?php

/**
 * Deve excluir o cookie e a sesssion
 */
    session_start();

    session_unset();

    session_destroy();

    setcookie('tema', '', -1);
    
    header("Location: index.php");
    
    exit;


?>