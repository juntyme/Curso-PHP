<div class="titulo">Trits #02</div>
<?php

trait validacao {

    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public function validarString($str) {
        return isset($str) && trim($str);
    }
}

// RESOLUÇÃO DE CONFLITOS
class Usuario {

    use validacao, validacaoMelhor {

        /// Seleciona a validação objetivamente
        validacaoMelhor::validarString insteadOf validacao;
        // validacao::validarString insteadOf validacaoMelhor;

        validacao::validarString as validacaoSimples;

    }

}

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validacaoSimples(' '));