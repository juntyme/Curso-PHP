<div class="titulo">Traits #01</div>
<?php

// pode usar apartir de composicao
trait validacao {

    public $a = 'Valor a';

    /// se esta setada isset
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {

    public $b = 'Valor b';
    private $c = 'Valor C (privado)';

    public function validarStringMelhor($str) {
        return isset($str) && trim($str);
    }
}

class Usuario {

    /// Carrega a traits copiar
    use validacao, validacaoMelhor;

    public function imprimirValorC() {
        echo '<br>', $this->c;
    }
}

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validarStringMelhor(' '));
echo '<br>';
echo $usuario->a, '<br>',$usuario->b;
$usuario->imprimirValorC();