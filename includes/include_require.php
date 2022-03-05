<div class="titulo" >Include Require</div>
<?php

echo 'Usando include com arquivo inexistente... <br>';

/// Gerar erros do php
ini_set('display_errors',1);  /// 1 true, 0 false

include('arquivo_inexistente.php');
include('arquivo_inexistente.php');

echo 'Usando require com arquivo inexistente...<br>';
require('arquivo_inexistente.php');

echo 'Não achou mesmo..<br>';