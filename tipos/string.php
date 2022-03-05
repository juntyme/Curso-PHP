<div class="titulo">Tipo String</div>
<?php

echo 'Eu sou uma String';
echo '<br>';

var_dump("Eu Também");
echo '<br>';

// Concatenação "."
echo( "Nós também" . ' somos');
echo '<br>', "Também aceito", " virgulas"; ## No comando echo
echo '<br>';
echo "'Teste' ". '"Teste" '. '\'Teste\''. "\"Teste\"" . "\\"; ## Caracteres de Scype


## Função Print também imprime
print("<br> Tabem existe a função print");
print "<br> Tabem existe a função print";

## Alguma funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
ECHO '<br>' . ucfirst('só a primeria letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas Letras?');
echo '<br>' . mb_strlen('Eu também', 'utf-8');
echo '<br>' . substr('Só uma parte mesmo', 7 ,6 );  # Inicia no 7 para no 5 o seis não entra na contagem
echo '<br>' . str_replace('isso', 'aquilo', 'trocar isso isso');