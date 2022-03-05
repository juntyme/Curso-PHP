<div class="titulo"> Conversões</div>

<?php
echo is_int(PHP_INT_MAX); # Se adicionar 1 ao interio maximo ele ultrapassa o valor de int se torna no caso um float

// int para float
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';

var_dump(1 + 1.0);
echo '<br>';

var_dump((float) 3); # Conversão explicita de int para float não perde informação agora float para int perde informação


echo '<br>';
echo '<p>Float para int</p>';
var_dump((int) 2.8);
echo '<br>';

var_dump(intval('11010101101', 2)); # Conversão valores binários
echo '<br>';
var_dump((int) round(2.8));

echo '<br>';
var_dump(3 + '2');
echo '<br>';
var_dump('3' + 2);
echo '<br>';
var_dump('3' . 2);

echo '<br>', is_string('3' . 2);
echo '<br>', is_string('3' + 2); ### Gera um valor Inteiro
echo '<br>';
var_dump(1 + '5 Cinco'); ## Pega o 5  e ingnora o cinco
echo '<br>';
var_dump(1 + '5 + 7'); ## Pega o 5  e ingnora o resto da string
echo '<br>';
var_dump(1 + '3.5'); ## o Resultado é positivo pega o float
echo '<br>';
var_dump(1 + '-3.2e2');
echo '<br>';
var_dump((int) "10.5");
echo '<br>';
var_dump((float) "10.5");