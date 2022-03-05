<div class="titulo">Função & Escopo </div>
<?php

##  Função é um bloco de código
function imprimirMensagens() {

    echo "Olá! ";
    echo "Até a proxima!<br>";

}

imprimirMensagens();  // Invoca a função

// Variavel dentro de um metodo

$variavel = 1; // Cria Variavel

function trocaValor() {
    $variavel = 2;  // Variaveis Locais
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";

function trocaValorDeVerdade(){
    global $variavel; /// Variaveis Dentro do script todo php
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}
echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";

var_dump(trocaValorDeVerdade());
