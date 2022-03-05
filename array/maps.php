<div class="titulo">Maps</div>
<?php

/// Array de pares chaves de valor
$dados = array(
    "idade" => 25,
    "cor" => "Verde",
    "peso" => 49.8
);

print_r($dados);

var_dump($dados[0]);
echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];
echo '<br>';
var_dump($dados["outro_valor"]);