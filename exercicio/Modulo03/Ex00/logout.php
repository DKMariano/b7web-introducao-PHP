<?php

/**
 * Deve excluir o cookie e a sessão
 */

// Inicia a sessão para poder destruí-la
session_start();

// Remove todas as variáveis da sessão
session_unset();

// Destroi a sessão no servidor
session_destroy();

// Apaga o cookie do tema (data no passado)
setcookie('tema', '', time() - 3600, '/');

// Redireciona para a página inicial
header("Location: index.php");
exit;
?>
