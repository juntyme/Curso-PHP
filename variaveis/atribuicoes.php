<div class="titulo">Atribuições</div>
<?php

$title = 'Atribuições';  // A tipagem em php é Tipagem fraca

$numero = 10;
echo '<br>' . $numero;

$numero = $numero - 3; // Forma reduzia
echo '<br>' . $numero;
$numero = $numero + 1.5; // Deixou de ser int e virou float
echo '<br>' . $numero; //  Incremento e decremento

$numero--; // Operador Unário pós fixado, apenas variavel
echo '<br>' . $numero;

--$numero; // Operador pré-fixado
echo '<br>'. $numero;

$numero++; // Operador Unário pós fixado, apenas variavel
echo '<br>' . $numero;

++$numero; // Operador Unário pós fixado, apenas variavel  $numero = $numero + 1;
echo '<br>' . $numero;

$numero = 20;
$numero -= 5; // Atribuição subtrativa
echo '<br>' . $numero;

$numero += 5; // Atribuição aditiva
echo '<br>' . $numero;

$numero *= 10; // Atribuição Multiplicativa
echo '<br>' . $numero;

$numero /= 10; // Atribuição Divisiva
echo '<br>' . $numero;

$numero %= 6; // Atribuição Modulo
echo '<br>' . $numero;

$numero **= 10; // Atribuição a Potencia
echo '<br>' . $numero;

$numero .= 4; // Apenas concatenação
echo '<br>' . $numero;

## sintase infixo, interno ex 1 + 1

// STRING
$texto = 'Esse é um texto';
echo '<br>'. $texto;
$texto = $texto .' qualquer';
echo '<br>'. $texto;
$texto.= ' de verdade!';

// $variavelInexistente = 'Valor existente';
echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'valor default'; /// Valor padrão for inexistente
echo '<br>'. $valor;
