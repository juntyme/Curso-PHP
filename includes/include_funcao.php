<div class="titulo">Include Função</div>
<?php

echo 'Carregando: include_funcao<br>';


// o Include fica exclusimo uso para função o arquivo include não foi invocado
function carregarArquivo() {

    include('include_arquivo.php');

    echo $variavel . '<br>';
    echo soma(2, 5) . '!<br>';
}

echo 'Novamente no arquivo include_funcao<br>';

carregarArquivo();

echo "Variável = '{$variavel}'.";
var_dump($variavel);

echo soma(1, 8) . '!<br>';  /// pode chamar a função pois já foi invocado o carregamento na função