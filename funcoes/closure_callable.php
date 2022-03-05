<div class="titulo">Closure & Callable</div>
<?php

// Closure é uma Classe que envolve uma função
 $soma1 = function($a, $b) {
     return $a + $b;
 };

 // Callable => função normal não é um Closure não tem um processo automatico de colocar em um classe
function  soma2($a, $b){
    return $a + $b;
}

echo $soma1(2 ,3) . ' ';
echo (is_callable($soma1) ? 'Sim' : 'Não'). ' Primeiro<br> '; // F

echo soma2(2, 3). ' ';
echo (is_callable('soma2') ? 'Sim' : 'Não') . ' Segundo<br>';

// É um Objeto tipo Closure
// var_dump($soma1);
// var_dump(soma2);
echo '<br>';
$soma = function($a, $b){ return $a + $b;};

// Função que executa pode informar que é um
function executar2($a, $b, $op, Callable $funcao){
    $resultado = $funcao($a, $b) ?? 'nada';
    echo "$a $op $b = $resultado<br>";
}

/// Passa a função soma como parametro
executar2(2, 3, '+', $soma);
 executar2(3000, 3000, '+', soma2); // Não esta capsulada em uma classe
