<div class="titulo">Desafio For</div>
<!-- 
Usar o for...
#
##
###
####

1) Pode usar incremento $i++
2) Não pode usar incremento $i++
 -->
<?php

$inc = '';
for ($i = 0; $i < 5; $i++) {
    $inc .= '#';
    echo $inc, '<br>';
}

/// Apenas operações de concatenação
for ($impressao2 = '#'; $impressao2 !== '######'; $impressao2 .= '#') {
    echo "$impressao2 <br>";
}

$inc = '#';
for ($i = 0; $i < 5;) {
    echo $inc, '<br>';
    if ($inc == '#####') {
        break;
    }
    $inc = $inc . '#';
}