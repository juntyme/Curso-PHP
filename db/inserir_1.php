<div class="titulo">Inserir Registro</div>
<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro
    (nome, nascimento, email, site, filhos, salario) VALUES (
         'Joao Zinho',
         '1980-10-29',
         'marieta123@email.com.br',
         'https://marieta123.sites.com.br',
         2, 
         13000.87
         ) ";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if ($resultado) {
    echo "Sucesso :)";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();