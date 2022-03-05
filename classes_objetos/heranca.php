<div class="titulo">Herança</div>
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

// Herdade de Herança
class Usuario Extends Pessoa {

    public $login;

    // Pode definir um novo construtor
    function __construct($nome, $idade, $login){
        // $this->nome = $nome;
        // $this->idade = $idade;

        parent::__construct($nome, $idade);
         $this->login = $login;
        echo 'Usuario Criado! <br>';
    }

    function __destruct(){
        echo 'Usuário diz: Tchal!!<br />';
        parent::__destruct();
    }

    public function apresentar() {
        // Pode Substituir ou Subscrever
        // echo "@{$this->login}: {$this->nome}, {$this->idade} anos<br>";

        // Acrescenta como herança
        echo "@{$this->login}: ";
        parent::apresentar();

    }
}

$usuario = new Usuario('Gustavo Mendoça', 21, 'gust_mend');
$usuario->apresentar();

/// Chamar o Destrutor
unset($usuario);