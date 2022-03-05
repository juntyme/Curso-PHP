<div class="titulo">Classes PHP</div>
<?php

// Primeira Letra Miusculas para Nomeclatura de Classe
class Cliente {

    /// Atributo nome pertence ao objeto
    public $nome = 'Anônimo'; /// Modificador de visibilidade
    public $idade = 18;

    public function apresentar() {
        /// $this-> aponta para a o objeto atual
        return "nome: {$this->nome} Idade: {$this->idade} <br>";
    }

}

/// Palavra new cria num novo objeto
$c1 = new Cliente(); /// poder ser sem () new Cliente;
$c1->nome = 'Ana Silva';
$c1->idade = 27.5;
echo $c1->apresentar();


$c2 = new Cliente; /// poder ser sem () new Cliente;
$c2->nome = 'Gabriel';
$c2->idade = 30;
echo $c2->apresentar();
