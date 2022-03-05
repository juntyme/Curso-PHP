<div class="titulo">Desafios Erros</div>
<?php

interface Template {
    function metodo1();
    function metodo2($parametro);
}


///  pode receber um implemento
abstract class ClasseAbstrata implements Template {

    public function metodo3(){
        echo "Estou funcionando";
    }

    public function metodo1() {
      }
}


class Classe extends ClasseAbstrata {

    function __construct($parametro) {
        echo "Estou funcionando";
    }


    public function metodo2($parametro){

    }

}

$exemplo = new Classe('...');
$exemplo->metodo3();