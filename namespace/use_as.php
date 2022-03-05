<?php namespace Outro\Nome; ?>
<div class="titulo">USE / AS</div>
<?php

echo __NAMESPACE__ . '<br>';

/// Include Arquivo
include_once('use_as_arquivo.php');

function soma($a, $b) {
    return $a . $b; /// Eu sei!!!
}

class Classe {
    public $var;

    function func() {
        echo __NAMESPACE__ .' -> ' .
        __CLASS__ .' -> '.
        __METHOD__ . '<br>';
    }
}

echo \Nome\Bem\Grande\constante . '<br>';

/// Use associado com uma constante
use const Nome\Bem\Grande\constante;
echo constante. '<br>';

/// Use associado com a class nomeando
use Nome\Bem\Grande as ctx;

echo soma(1,2). '<br>';

echo ctx\soma(1,2). ' com ctx <br>';

//// Use associado a uma função
use function Nome\Bem\Grande\soma as somaReal;

echo somaReal(1,2). ' somaReal<br>';

$a = new Classe();
$a->func();

$b = new \Nome\Bem\Grande\Classe();
$b->func();


$c = new ctx\Classe();
$c->func();

use \Nome\Bem\Grande\Classe as D;
$d = new D();
$d->func();
