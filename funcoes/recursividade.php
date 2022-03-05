<div class="titulo">Recursividade</div>
<?php

function somaUmAte($numero)
{

    $soma = 0;
    for ($i = 1; $i <= $numero; $i++) {
        $soma += $i;
        echo "$soma <br>";
    }

    return $soma;
}

echo somaUmAte(10) . '<br>';
echo '<br>';

function somaRecursivaUmAte($numero)
{

    // Condição de Parada
    if ($numero === 1) {
        return 1;
    }

    return $numero + somaRecursivaUmAte($numero - 1);
}

echo somaRecursivaUmAte(150) . '<br>';

function somaRecursivaEconomica($numero)
{
    /// uso de if ternário
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
}

echo somaRecursivaEconomica(150) . '<br>';