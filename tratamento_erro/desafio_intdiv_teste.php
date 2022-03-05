<div class="titulo">Desafio Intdiv</div>
<?php

// ini_set('display_errors', 1);

require_once 'desafio_intdiv.php';
use function \Aritmetica\intdiv;

try{
    echo intdiv(8, 4). '<br>';

} catch (\Aritmetica\NaoInteiroException $e){
    echo 'Resultado não é um número inteiro<br>';
} finally {
    echo "<br/>Arquivo carregado corretamente.";
}


try{
 echo intdiv(8, 0). '<br>';
} catch(DivisionByZeroError $e) {

    echo '<br/>Divisão por zero<br>';
}

echo intdiv(8,2).'<br>';
echo \intdiv(8,2).'<br>';
 echo \intdiv(8, 3). '<br>'; /// com original não dá erro