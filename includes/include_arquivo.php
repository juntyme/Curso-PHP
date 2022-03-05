<?php

echo 'Carregando: Include_arquivo<br>';

$variavel = 'Estou definida';

// verifica se a função existe anteriormente ou se foi carregado.
if(!function_exists('soma')){
    function soma($a, $b) {
       return $a + $b;
    }
}
