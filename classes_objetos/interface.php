<div class="titulo">Interface</div>
<?php

// por padrão os metodos são public => define funções
interface Animal {

    // Função Genérica 
    function respirar();

}

interface Mamifero {
    function mamar();
}

// por padrão os metodos são public
interface Canino extends Animal, Mamifero {
    function latir(): string;
}

/// Apenas uma hierarquia classes
class Cachorro implements Canino {

    function respirar() {
        return "Irei usar oxigênio!<br>";
    }

    function latir(): string {
        return 'au au';
    }

    function mamar(): string {
        return 'Leite';
    }

}

$animal1 = new Cachorro();
echo $animal1->respirar(), '<br>';
echo $animal1->latir(), '<br>';

var_dump($animal1);
echo '<br>';
var_dump($animal1 instanceof Cachorro);
var_dump($animal1 instanceof Canino);
var_dump($animal1 instanceof Mamifero);