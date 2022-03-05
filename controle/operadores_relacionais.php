<div class="titulo">Operadores Relacionais</div>
<?php
var_dump(1 == 1); /// igualdade true
var_dump(1 > 1); // maio que  false
var_dump(1 >= 1);  /// maior que igual   true
var_dump(4 < 23); // menor que   true
var_dump(1 <=7); /// menor que e igual true
var_dump(1 != 1); // diferente false
var_dump(1 <> 1); // diferente false

var_dump(111 == '111'); /// comparação inteiros igualdade true o conteudo é igual true
var_dump(111 === '111'); /// comparação resultado false 
var_dump(111 != '111');   /// resutado false
var_dump(111 !== '111');   /// resutado true

echo "<p class='divisao'> Relacionais no If/Else</p><hr>";

$idade = 15;

if($idade < 18){
    echo "Menor de idade = $idade anos<br>";
} else if($idade <= 65) {
    echo "Adulto = $idade anos";
} else {
    echo "Terceira Idade = $idade anos";
}


echo "<p class='divisao'>Spaceship</p><hr>";
//// Pode utilizar para ordenação de números
var_dump(500 <=> 3); /// O primeiro operando maior que o segundo int(1)
var_dump(50 <=> 50); /// retorna o valor int(0)
var_dump(5 <=> 50);  /// Retorna o valor int(-1)

echo "<p class='divisao'>Valores pode ser V ou F</p><hr>";
var_dump(!!5); // Verdadeiro
var_dump(!!0); /// false
var_dump(!!"");  // false
var_dump(!!" "); // verdadeiro

?>