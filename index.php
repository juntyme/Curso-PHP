<?php

//// abrir session
session_start();

/// Verificar cookie
if($_COOKIE['usuario']){
    $_SESSION = $_COOKIE['USUARIO'];
}

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
    <title>Curso PHP</title>
</head>



<body>

    <!-- Cabeçalho-->
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índices dos Exercícios</h2>
    </header>
    <!-- Navegação Exercicios -->
    <nav class="navegacao">
        <span class="usuario">usuário: <?= $_SESSION['usuario'] ?></span>
        <a href="logout.php">Sair</a>
    </nav>
    <!-- Conteudo Principal-->
    <main class="principal">
        <div class="conteudo">
            <?php include_once('menu.php'); ?>
        </div>
    </main>

    <!-- Rodape-->
    <footer class="rodape">
        <!-- d m Y -->
        COD3ER & ALUNOS @ <?= date('Y'); ?>
    </footer>

</body>

</html>