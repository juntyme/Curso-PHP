<div class="titulo">Try / Catch</div>
<?php

//// Gera um erro infinito
// echo intdiv(7,0);


/// Trata os erros e não interrompe as execuções
try {
    echo intdiv(7,0);

    /// catch pode ter mais de uma condição exemplo Exception
} catch(Error $e) {
    echo 'Teve um erro aqui<br>';
}

try {
    throw new Exception('Um erro muito estranho');
    echo intdiv(6,0);

    /// Excessões espeficicas primeiro
} catch(DivisionByZeroError $e) {

    echo 'Divisão por zero<br>';

    //// Excessões Genericas por Último
} catch(Throwable $e) {

    echo 'Erro encontrado: ' .$e->getMessage() . '<br>';
    /// Sempre executado
} finally {
    echo 'Sempre executado!<br>';
}

echo 'Execução continua... <br>';
