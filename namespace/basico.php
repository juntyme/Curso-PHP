<?php namespace contexto; // Sempre a primeira sentença ?>

<div class="titulo">Exemplo Básico</div>

<?php
echo __NAMESPACE__ .'<br>';

/// Padrão utilizar letras maiusculas cria a contanten já associada ao namespace
const CONSTANTE1 = 123;

// com define tem que associar declaradamente
define('contexto\constante2', 234);

/// Estará no namespace rais do php
define('constante2', 2345);

define(__NAMESPACE__.'\constante3', 345);
/// nomespace que ainda não exista.
define('outro_contexto\constante4', 456);

echo CONSTANTE1.'<br>';
echo constante2.'<br>'; /// acessar constante local
echo \constante2.'<br>'; // acessar constante rais

echo \contexto\constante3 . '<br>'; //// acessar de forma absolutabr

echo constant(__NAMESPACE__.'\constante3'). '<br>';

/// acessar outro nomespace pelo caminho absoluto
echo \outro_contexto\constante4 . '<br>';

// conceito de subname space
/* <?php namespace contexto\a\sub\name;?> */

function soma($a, $b) {
    return $a + $b;
}

echo \contexto\soma(1,2). '<br>';

echo soma(1,2). '<br>';

/// Função conflitante com o PHP
function strpos($str, $text) {
    echo "Buscando o texto '{$text}' em '{$str}' <br>";
    return 1;
}

echo strpos('Texto genérico para busca', 'busca'). '<br>';
echo \strpos('Texto genérico para busca', 'busca'). '<br>'; /// acessar a API do PHP