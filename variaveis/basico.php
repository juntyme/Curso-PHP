<div class="titulo"> Variáveis</div>
<?php
$numeroA = 12;
echo $numeroA, '<br>';
var_dump($numeroA);
echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros;  ##

echo '<br>';
echo isset($somaDosNumeros);  # Verifica a existencia de uma variavel

unset($somaDosNumeros); # a variavel não esta mais setada
echo '<br>';
var_dump($somaDosNumeros);

$variavel = 'Agora sou uma string!';
echo '<br />' .$variavel;
echo '<br />';
var_dump($variavel);

/// NOMECLATURA -  Nomes de variáveis
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$var5 = 'valida';
// $6var = 'invalida';
// $%var7 = invalida';
// $var8% = 'invalida';

echo '<br>';
var_dump($_SERVER['HTTP_HOST']);

// Superglobais — Superglobais são variáveis nativas que estão sempre disponíveis em todos escopos
// $GLOBALS — Referencia todas variáveis disponíveis no escopo global
// $_SERVER — Informação do servidor e ambiente de execução
// $_GET — Variáveis HTTP GET tipo array
// $_POST — HTTP POST variables
// $_FILES — Variáveis de Upload de Arquivos HTTP
// $_REQUEST — Variáveis de requisição HTTP
// $_SESSION — Variáveis de sessão
// $_ENV — Variáveis de ambiente
// $_COOKIE — Cookies HTTP
// $php_errormsg — A mensagem de erro anterior
// $http_response_header — Cabeçalhos de resposta HTTP
// $argc — O número de argumentos passados para o script
// $argv — Array de argumentos passados para o script