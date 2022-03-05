<?php

class Pessoa {

    // Atributos pertencente ao objeto
    public $nome;
    public $idade;

    function __construct($novo, $idade)
    {
        $this->nome = $novo;
        $this->idade = $idade;
    }

    function __destruct()
    {
        echo 'Pessoa Tchau!!';
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos<br>";
    }

}
