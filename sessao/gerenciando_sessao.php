<div class="titulo">Gerenaciando Sessão</div>
<?php
/// secolocar antes de abrir session roupa a session
// session_id('jkslkdjfiosudfoisjlfks');

session_start();

// Recuperar Session ID cria uma nova session quando abrir o navegador
echo session_id();
$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1: 1;
echo '<br>'. $_SESSION['contador'];

if($_SESSION['contador'] % 5 === 0) {
    session_regenerate_id();
}

if($_SESSION['contador'] >= 15) {
    session_destroy();
}