<div class="titulo">Laço FOR</div>
<?php

//// contador, limite de repetições, contagem
for ($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}

echo "<hr>";

// pode usar qualquer parte opcional
for (; $cont <= 10; $cont++) {
    echo "$cont <br>";
}

// Contagem infinida
for (; $cont <= 10;) {
    echo "$cont <br>";
}

$array = [1 => 'Domingo', 'segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

print_r($array);
echo '<hr>';
for ($i = 1; $i < count($array); $i++) {
    echo "{$array[$i]} <br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

for ($i = 0; $i < count($matrix); $i++) {
    for ($j = 0; $j < count($matrix[$i]); $j++) {
        echo "{$matrix[$i][$j]} ";
    }
    echo '<br>';
}