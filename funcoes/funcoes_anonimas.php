<div class="titulo">Funções Anonimas</div>
<?php


## PARADIGMA DE PROGRAMAÇÃO FUNCIONAL
// Função anonima pode ser chamado um Callable
$soma = function($a, $b){ return $a + $b;};

echo $soma(1,2). '<br>';

// Função que executa pode informar que é um
function executar($a, $b, $op, Callable $funcao){
    $resultado = $funcao($a, $b) ?? 'nada';
    echo "$a $op $b = $resultado<br>";
}

/// Passa a função soma como parametro
executar(2, 3, '+', $soma);

$multiplicacao = function($a, $b) { return $a * $b; };

executar(2, 3, '*', $multiplicacao);

## Divisão
function divisao($a, $b) {
   return $a / $b;
}

executar(9, 3, '/', divisao);
