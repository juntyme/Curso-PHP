<?php
namespace Nome\Bem\Grande;

echo __NAMESPACE__ . '<br>';

/// Declarar constante
const constante = 123;


/// Função retorna
function soma($a , $b) {
    return $a + $b;
}

/// Classe com variavel publica
class Classe {

    public $var;

    function func() {
        echo __NAMESPACE__ . ' -> '
        . __CLASS__. ' -> '
        . __METHOD__. '<br>';
    }
}
