<div class="titulo">Retornando Função</div>
<?php

function soma($a){

    // Recuparar function
    return function($b) use ($a) {
        return $a + $b;
    };
}

// Soma as Function
echo soma(3)(3);

// Variavel com function
$doisMais = soma(2);

echo '<br>', $doisMais(10); /// Soma de 2 Mais 10
echo '<br>', $doisMais(18);