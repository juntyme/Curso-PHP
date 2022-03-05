<div class="titulo">While / Do While</div>
<?php

const VALOR_LIMITE = 5;
$contador = 0;

while ($contador < VALOR_LIMITE) {
    echo "while $contador <br>";
    $contador++;
}

/// Unica estrutura de controle que termina com ;
$contador = 0;
do {
    echo "do-while $contador <br>";
    $contador++;
} while ($contador < VALOR_LIMITE);


//// Mesmo senario que for
$contador = 0;
for (; $contador < VALOR_LIMITE;) {
    echo "while $contador <br>";
    $contador++;
}

//// Laço infinito
$contador = 0;
while (true) {
    echo "while(true) $contador <br>";
    $contador++;
    if ($contador >= VALOR_LIMITE) break;
}