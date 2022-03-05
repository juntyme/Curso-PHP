<div>Argumentos & Variáveis</div>
<?php

function soma($a, $b) {
    return $a + $b;
}

echo soma(4, 6,7,8,9). '<br>';

## Anotações Argumentos Variaveis
function somaCompleta(...$numeros) {
     ## São todos colocados dentro de um Array
    //  print_r($numeros);

     $soma = 0;
     foreach($numeros as $num) {
         $soma += $num;
     }

     return $soma;
}

echo '<br>'. somaCompleta(1, 2, 3, 4, 5);

$array = [6,7,8];
echo '<br>'. somaCompleta(...$array);  /// Descompact em array

function membros($titular, ...$dependentes) {
    echo "Titular: $titular <br>";
    if($dependentes) {
        foreach($dependentes as $dep) {
            echo "Dependente: $dep <br>";
        }
    }
}

echo '<br>';
membros("Ana Silva", "Pedro", "Rafaela", "Amanda");

echo '<br>';
membros("Roberto");

echo '<br>';
membros("Junior", "Pedro");