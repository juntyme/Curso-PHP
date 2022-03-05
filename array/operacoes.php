<div class="titulo">Operações</div>
<?php


$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => 'Fortaleza',
    "nome" => "Sandra"
];

//// A Prioriade esta para quem esta na esquerda $dados1
$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos);

echo '<br>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}";
echo "${dadosCompletos['idade']}";

/// Remover um elemento
unset($dadosCompletos["nome"]);
echo '<br>';
print_r($dadosCompletos);

/// Remove o array inteiro liberar memória
unset($dadosCompletos);
echo '<br>';
var_dump($dadosCompletos);

$impares = [1, 3, 5 ,7 ,9 ];
$pares = [0, 2, 4, 6, 8];

/// Sobrescreve os valores
$decimais = $pares + $impares;
echo '<br> concatenação +';
print_r($decimais);

/// Faz a junção das array
$decimais = array_merge($pares, $impares);
echo '<br>função array_merge';
print_r($decimais);

sort($decimais);
echo ' <br>função Sort';
print_r($decimais);