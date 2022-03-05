<div class="titulo">Polimorfismo</div>
<?php

/// Disponivel apenas para herança
abstract class Comida {
    public $peso;
}

class Arroz extends Comida {

}

class ArrozAGrega extends Arroz {

}

class Feijao extends Comida {

}

class Sorvete extends Comida {

}

class Pessoa {
    public $peso;

    function __construct($peso){
        $this->peso = $peso;
    }

    // O Polimorfismos esta na questão do Arroz a pessoa pode comer varios tipos de arroz, ou seja objetos filhos de arroz
    /// A Variaveis pode assumir muitas formas pode ser int, string, float, no caso o melhor amarrar como no exemplo
    public function comer(Arroz $comida) {
        $this->peso += $comida->peso;
    }

}

$c1 = new Arroz();
$c1->peso = 0.65;

$c2 = new ArrozAGrega();
$c2->peso = 1.75;

$c3 = new Sorvet();
$c3->peso = 1.75;

$p = new Pessoa(83.45);
$p->comer($c1);
$p->comer($c2);

echo $p->peso;