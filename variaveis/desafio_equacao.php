<div class="titulo">Desafio Equação</div>
<?php

$a = (6 * (3 + 2)) ** 2;
$b = ((1 - 5) * (2 - 7));
$c = 3 * 2;
$d = 2;

$e = ($a / $c) - ($b / $d) ** 2;
$f = ($e ** 3) / (10 ** 3);

echo "O Resultado final é " . $f . ".<br>";
echo __FILE__, '<br>';
echo __LINE__, '<br>';
echo __METHOD__;
