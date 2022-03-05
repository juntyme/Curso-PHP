<?php
session_start();
if(!$_SESSION['usuario']) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/exercicios.css">
    <title>Exercícios</title>
</head>

<body class="exercicio">

    <!-- Cabeçalho-->
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercícios</h2>
    </header>
    <!-- Navegação Exercicios -->
    <nav class="navegacao">
        <span class="usuario">usuário: <?= $_SESSION['usuario'] ?></span>

        <a href=<?= "/curso_php/{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
        <a href="logout.php">Sair</a>
    </nav>
    <!-- Conteudo Principal-->
    <main class="principal">
        <div class="conteudo">
            <!-- Carregamento dinamico
                   __DIR__  caminho absoluto
          -->
            <?php include(__DIR__."/{$_GET['dir']}/{$_GET['file']}.php"); ?>
        </div>
    </main>

    <!-- Rodape-->
    <footer class="rodape">
        <!-- d m Y -->
        COD3ER & ALUNOS @ <?= date('Y'); ?>
    </footer>

</body>

</html>