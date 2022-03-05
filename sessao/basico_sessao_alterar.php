<?php
/// acesso a sessão do arquivo
session_start();

print_r($_SESSION);

?>

<p>
    <b>Nome:</b><?= $_SESSION['nome'] ?>
    <b>Email:</b><?= $_SESSION['email'] ?>
</p>
<?php
$_SESSION['email'] = 'gabrielfilho@emailaz.com.br';
?>

<p>
    <a href="exercicio.php?dir=sessao&file=basico_sessao">voltar</a>
</p>
<p>
    <a href="exercicio.php?dir=sessao&file=basico_sessao_limpar">Limpar Sessão</a>
</p>