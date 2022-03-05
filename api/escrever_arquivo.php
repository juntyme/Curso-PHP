<div class="titulo">Escrevendo quivo</div>
<?php
ini_set('display_errors', 1);

/// mode de escrita W
$arquivo = fopen('teste.txt', 'w');

// Abrir o arquivo.
fwrite($arquivo, "Valor inicial\n");

$str = "Segunta linha\n";
fwrite($arquivo, $str);

/// Fechar o arquivo
fclose($arquivo);


$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo conteúdo");
fclose($arquivo);

/// acrescentar novas linhas  (a)
$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, "Com novos valores\n");
fwrite($arquivo, "Adicionados em um segundo momento");
fclose($arquivo);

//// Obrigatoriamente um arquivo novo
$arquivo = fopen('teste2.txt', 'x');
fwrite($arquivo, "Arquivo novo!!");