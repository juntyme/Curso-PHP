<div class="titulo">PDO: Inserir</div>
<?php

// Exemplo
// $pdo = new PDO('mysql:host=localhost;dbname=crud', 'root', '');
// $stmt = $pdo->prepare('select * from agenda where nome = :nome');
// $stmt->bindValue(':nome', 'kalil');
// $run = $stmt->execute();
// $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($result);


/// Carregar conexão
require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro (nome, email, nascimento, site, filhos, salario)
VALUES (
    'Ghilherme Filho',
    'guidagalera@gmail.com',
    '1898-7-27',
    'http://guidagalera.com.br',
    0,
    3000
)";

/// Nova Conexao
$conexao = novaConexao();

//// Salvar e recuperar ID
if ($conexao->exec($sql)) {
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com id $id.";
} else {
    echo $conexao->errorCode() . "<br>";
    print_r($conaxao->errorInfo());
}

$conexao->close();
// Faz um teste de conexão
// print_r(get_class_methods($conexao));
