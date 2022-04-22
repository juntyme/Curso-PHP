<div class="titulo">Constantes</div>
<?php
define('TAXA_DE_JUROS', 5.9);  /// A função define uma constante PATRONIZAÇÃO TODAS AS LETRAS MAIUSCULAS

echo TAXA_DE_JUROS;
// TAXA_DE_JUROS = 2.5 // GERA UM ERRO

const NOVA_TAXA = 2.5; /// Funciona tambem em javaScript apenas valores literais
echo '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;
define('NOVISSIMA_TAXA', $valorVariavel);
// const NOVISSIMA_TAXA = $valorVariavel;
// const NOVISSIMA_TAXA = 2.8 + 1.2;
echo '<br>' . NOVISSIMA_TAXA;

echo '<br>PHP Version: ' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;
echo '<br> linha: ' . __LINE__; /// Carrega a linha
echo '<br>' . __FILE__; /// carrega o file
echo '<br>' . __DIR__; // carrga o diretorio
echo '<br>' . __METHOD__; // carrga o diretorio