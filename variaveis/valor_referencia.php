<div class="titulo">Valor Referência</div>

<?php

$variavel = 'valor inicial'; // atribuição por valor literal
echo $variavel;

## Atribuição por Valor
$variavelValor = $variavel;  /// Atribuição por Valor padrão  => Cria dois espaços de memoria
echo "<br>$variavelValor";
$variavelValor = 'novo valor';
echo "<br>$variavel";
echo " $variavelValor";

## Atribuição por Referência
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo "<br>$variavel";
echo "<br>$variavelReferencia";