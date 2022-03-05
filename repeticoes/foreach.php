<div class="titulo">Laço Foreach</div>
<?php

$array = [1 => 'Domingo', 'segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

foreach ($array as $valor) {
    echo "$valor <br>";
}

foreach ($array as $indice => $valor) {
    echo "$indice => $valor <br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];


foreach ($matrix as $linha) {
    foreach ($linha as $valor) {
        echo "$valor ";
    }
    echo "<br>";
}

echo '<hr>';

$numeros = [1, 2, 3, 4, 5];
foreach ($numeros as &$dobrar) {
    $dobrar *= 2;
    echo "$dobrar ";
}

print_r($numeros);