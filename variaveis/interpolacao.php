<div class="titulo">Interpolação</div>
<?php

/// Interpolação

$numero = 10;
echo $numero;
echo '<br> $numero'; /// Delimitador com aspas simples não executa a interpolação
echo "<br> $numero"; /// Delimitador com aspas duplas executa a interpolação

$texto = "A sua nota é: $numero";
echo "<br>$texto";

$objeto = 'caneta';
echo "<br>Eu tenho 5 $objeto s"; // Não resolve
echo "<br>Eu tenho 5 {$objeto}s."; // Resolve a variavel
echo "<br>Eu tinha 5 { $objeto}s mas perdi 3 {$objeto }s.";
echo "<br>";
echo "$numero";
// echo "{ $a + 5}"; // Gera erro não esta disponivel no php

/// Com javaScript a interpolção é feita com a `${a} ${b}`, `${a * 10}`