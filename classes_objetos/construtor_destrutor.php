<div class="titulo">Construtor & Destrutor</div>
<?php

class Pessoa {

    public $nome;
    public $idate;

        /// Não chama este metodo diretamente
    public function __construct($novoNome, $idade = 18)
    {
        echo '<br>Construtor invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }


    function __destruct()
    {
        echo 'E morreu!';
    }

    public function apresentar(){
       echo "<br>{$this->nome}, {$this->idade} anos<br>";
    }
}

$pessoa = new Pessoa('Rebeca Maria', 40);
$pessoa->apresentar();
unset($pessoa);

$pessoaB = new Pessoa('Jonas Ferreira', 40);
$pessoaB->apresentar();
$pessoaB = null;