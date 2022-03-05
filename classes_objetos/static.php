<div class="titulo">Membros Static PHP</div>
<?php

// Classe é instância
class A {

    // Variavel de Objeto sinonimo Instancia
    public $naoStatic = 'Variável de instância';

    // Não é variável de instância
    public static $static = 'Variável de classe (stática)';

    public function mostrarA() {
        echo "Não estática = {$this->naoStatic}<br/>";

        // Tentantiva 1
        // echo "Estática = {$this->static}<br>"; /// Não funciona
          // Tentantiva 2
        // echo "Estática = {self::$static}<br>";
        echo "Estática = ". self::$static ."<br>";
    }

    public static function mostrarStaticA() {
        // echo "Não estático = {$this->naoStatic}<br>";  não tem como acessar
         echo "Estática = ". self::$static ."<br>";
    }

}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStaticA();  /// não pertence ao objeto e sim a class

// Acessar diretamente pela classe
echo '<br>';
echo A::$static, '<br>';
A::mostrarStaticA();

A::$static = 'Alterado membro de classe!';  /// pode alterar o membro de classe
echo A::$static, '<br>';