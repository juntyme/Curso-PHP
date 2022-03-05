<div class="titulo">Ler Arquivo</div>
<?php

ini_set('display_errors', 1);

$arquivo = fopen('teste.txt','r');

/// Lendo apenas 10 bites
echo fread($arquivo, 10);
echo '<br>';
echo fread($arquivo, 10);
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt');
echo $tamanho . '<br>';
echo fread($arquivo, $tamanho);
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r'); /// principalmente arquivos CSV
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
var_dump(fgets($arquivo));
echo '<br>';
fclose($arquivo);

echo '<hr>';


//// Ler arquivo por linha
$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) {
    echo fgets($arquivo), '<br>';
}
fclose($arquivo);

echo '<hr>';

// ler o arquivo por caracteres
$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) {
    echo fgetc($arquivo);
}
fclose($arquivo);

echo '<hr>';

//// Mode de Leitura e Gravação
/// Apenas com r é ignorado a escrita
$arquivo = fopen('teste.txt', 'r+');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fwrite($arquivo, "\nAdicionado durante a leitura");
fclose($arquivo);

echo "Fim!";