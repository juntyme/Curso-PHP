<?php 
/// abrir session
session_start();

/// Destruir session
session_destroy();

// Excluir Coookie
unset($_COOKIE['usuario']);
setcookie('usuario', '');

/// Redirecionar para página de login
header('Location: login.php');

?>