<div class="titulo">Argumentos e Retornos</div>
<?php

function obterMensagem(){
    return 'Seja bem vindo(a)!';
}

$m = obterMensagem();
echo $m;

echo '<br>', obterMensagem();
echo '<br>';
var_dump(obterMensagem());

function obterMensagemComNome($nome) {
    return "Bem vindo, {$nome}!";
}

echo '<br>', obterMensagemComNome('Jonas');

function soma($a, $b) {
    return $a + $b;
}

echo '<br>', soma(45, 78);
$x = 4;
$y = 5;
echo '<br>', soma($x, $y);

function trocaValor($a, $novoValor) {
    $a = $novoValor;
    }

$variavel = 1;
trocaValor($variavel, 3);
echo '<br>', $variavel;

// Envia o endereço referencial
function trocaValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}

/// Fere o principio do paradigma pode gerar bugs
trocaValorDeVerdade($variavel, 5000);
echo '<br>', $variavel;