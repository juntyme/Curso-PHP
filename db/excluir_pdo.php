<div class="titulo">PDO: Excluir</div>
<?php
require_once "conexao_pdo.php";

$conexao = novaConexao();

$sql = "DELETE FROM cadastro WHERE id = :id";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':id', 10, PDO::FETCH_INTO);

if ($stmt->execute()) {
    echo "Sucesso :)";
} else {
    echo "Error :(";
    print_r($stmt->errorInfo());
}

$conexao->close;
