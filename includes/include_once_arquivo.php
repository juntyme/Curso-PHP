<?php

echo 'Carregando: include_once_arquivo<br>';

$variavel = 'Estou definida';

if(!function_exists('soma')) {  /// Usando o include_once() ou require_once() não precisa existir a function_exists()
    function soma($a, $b) {
    return $a + $b;
    }
}
