<div class="titulo">Session & Cookie</div>
<?php
session_start();

print_r($_SESSION);
echo '<br>';

/// Criar Session
if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'Gabriel';
}

if(!$_SESSION['email']) {
    $_SESSION['email'] = 'gabriel@azmail.com';
}

print_r($_SESSION);

?>
<p>
    <a href="exercicio.php?dir=sessao&file=basico_sessao_alterar">Alterar Session</a>
</p>