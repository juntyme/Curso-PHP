<div class="titulo">Array</div>
<?php
$lista = array(1, 2, 3.4, "texto");

var_dump($lista);

/// Maneira mais correta
echo '<br>';
print_r($lista);

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
echo '<br>' . $lista[33]; /// Valor inexistente retorna NULL

echo '<br>';

/// Recuperar o indice de uma string
$texto = 'Esse é um texto de teste';
echo '<br>' . $texto[3];
echo '<br>' . $texto[8]; ////  Cuidado !! Caracteres especiais

echo '<br>' . mb_substr($texto, 10, 1);