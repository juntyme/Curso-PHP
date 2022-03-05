<div class="titulo">Include & Return</div>
<?php
$valorRetorno = require('return_usado.php');

echo "$valorRetorno<br>";
echo "$variavelRetornada<br>";

/// Carregada pelo caminho absoluto Constante __DIR__
echo __DIR__.'<br>';

$valorRetorno2 = require_once(__DIR__.'/return_nao_usado.php');

// var_dump($valorRetorno2);

echo "$valorRetorno<br>";
echo "$variavelDeclarada<br>";