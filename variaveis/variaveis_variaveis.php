<div class="titulo">Variáveis Variáveis</div>
<?php

$a = 'valorA';
$$a = 'valorAA';  // $valorA = valorAA
echo "$a {$$a} ${$a}"; /// Carregar variaveis interpolado, variavel variaveis

echo '<br>';
$epa= 'opa';
$opa = 'vish';
$vish = 'eita!!!';
echo  "$epa {$$epa} {$$$epa}"; /// Carrega $opa
