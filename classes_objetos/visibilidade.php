<div class="titulo" >Visibilidade</div>
<?php

class A {

    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    // Libera acesso para todos os atributos
    public function mostrarA() {
        // $this->naoMostrar();
        echo "Clase A) Public = {$this->publico}<br>";
        echo "Clase A) Protegido = {$this->protegido}<br>";
        echo "Clase A) Privado = {$this->privado}<br>";

    }

    /// Função por herança
     protected function vaiPorHeranca() {
        echo 'Serei transmitido por herança!<br/>';
    }

        // Não da para mostrar diretamente pode ser acessado por outra função
    private function naoMostrar() {
        echo 'Não vou imprimir!<br/>';
    }

}

$a = new A();
$a->mostrarA();


class B extends A {

    public function mostrarB() {
        echo "Class B) Public = {$this->publico}<br/>";
        echo "Class B) Protegido = {$this->protegido}<br/>";
        echo "Class B) Privado = {$this->privado}<br/>";

          parent::vaiPorHeranca();
    }

}

echo '<br>';
$b = new B();
$b->mostrarB();
$b->mostrarA();
// $b->vaiPorHeranca(); // Não sera transmitido por


echo "Fim!";