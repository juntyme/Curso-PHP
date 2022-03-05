<div class="titulo">Constantes</div>
<?php

/// não permite alterar uma constante
const FRUTAS = ['laranja', 'abacaxi'];
/// FRUTAS[0] = 'banana'; /// erro alteração
/// FRUTAS[] = 'banana';
echo FRUTAS[0];

const CARROS = ["fiat" => "Uno", "Ford" => "Fiesta"];
echo '<br>' . CARROS["fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
echo '<br>' . CIDADES[1];