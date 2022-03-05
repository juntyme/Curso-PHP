<div class="titulo">PDO: Consultar</div>
<?php
require_once "conexao_pdo.php";

$conexao = novaConexao();
$sql = "SELECT * FROM cadastro";
$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

print_r($resultado);

echo "<hr>";

$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";

$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtde', 2, PDO::PARAM_INT);  // Valor de inteiro
$stmt->bindValue(':inicio', 3, PDO::PARAM_INT);

print_r(get_class_methods($stmt));
echo "<hr>";

if ($stmt->execute()) {
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

echo "<hr>";

$sql = "SELECT * FROM cadastro WHERE id = :id";
$stmt = $conexao->prepare($sql);
// $stmt->bindValue(':id', 10, PDO::PARAM_INT);

// if ($stmt->execute([10])) {
// if ($stmt->execute()) {
if ($stmt->execute([':id' => 10])) {
    $resultado = $stmt->fetch();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

$conexao->close();
