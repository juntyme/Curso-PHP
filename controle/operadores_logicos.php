<div class="titulo">Operadores Lógicos</div>
<?php
echo "<p class='divisao'>V ou F</p><hr>";
var_dump(true); // operador unário
echo '<br>';
var_dump(!true);  /// inverte a logica, negação logica

echo "<p class='divisao'>Tabela Verdade 'AND' (E) </p><hr>";
/// proximo a linguagem de programação
var_dump(true && true);
var_dump(true && false);
var_dump(false && true); /// encontrou 1 false o resultado é false ou seja a expressão inteira é false
var_dump(false && false);
echo '<br>';
/// proximo ao programador
var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);


echo "<p class='divisao'>Tabela Verdade 'OR' (OU) </p><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);
echo '<br>';
var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);

echo "<p class='divisao'>Tabela Verdade 'XOR' (OU exclusivo) </p><hr>";
var_dump(true xor true); /// comprar um dos dois  resultado false
var_dump(true xor false); // true
var_dump(false xor true); // true
var_dump(false xor false); // fales 
echo '<br>';
var_dump(true != true); /// comprar um dos dois  resultado false
var_dump(true != false); // true
var_dump(false != true); // true
var_dump(false != false); // fales 


echo "<p class='divisao'>Exemplo </p><hr>";

$idade = 62;
$sexo = 'F';
$pagouPrevidencia = true;

$criterioHomem = ($idade >= 60 && $sexo === 'F');
$criterioMulher =  ($idade >= 65 && $sexo === 'M');
$atingiuCriterio =  $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;

echo "Pode ser aposentar -> $podeSeAposentar.<br>";

if($idade >=60 && $sexo === 'F'){
    echo "Pode se aposentar -> $sexo";
} elseif ($idade >= 65 && $sexo === 'M') {
        echo "Pode se aposentar -> $sexo";
} else {
    echo 'Vai ter que trabalhar mais um pouco...';
}

?>