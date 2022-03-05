<div class="tilulo">Error Handler</div>
<?php

ini_set('display_errors', 1);
echo 4 /0 . '<br>';

error_reporting(E_ERROR);
echo 4 / 0 . '<br>';

error_reporting(E_ALL);
echo 4 / 0 . '<br>';

error_reporting(~E_ALL);
echo 4 / 0 .'<br>';

echo '<hr>';

// Set error report para todos
error_reporting(E_ALL);
// echo 4 / 0 .'<br>';
// include 'arquivo_inexistente.php';

function filtrarMensagem($errno, $errstring){
    $text = 'include';
    // $text = 'by zero';
    return !!stripos(" $errstring", $text);
}

/// Filtra os erros handler
set_error_handler('filtrarMensagem', E_WARNING);

echo '<hr>';
echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';