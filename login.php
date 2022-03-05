<?php
session_start();

/// name inputs
$email = $_POST['email'];
$senha = $_POST['senha'];

if($_POST['email']) {

    $usuario = [
        [
            "nome" => "Aluno Coder",
            "email" => "aluno@coder.com.br",
            "senha" => "123456"
        ],
         [
            "nome" => "Outro Aluno",
            "email" => "aluno@coder.com.br",
            "senha" => "654321"
        ]
    ];

    foreach($usuario as $usuario){
        /// colocar na variavel apos verificação
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if($emailValido && $senhaValida) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];

            /// Definir hora de expiração
            $exp = time() + 60 * 60 * 24 * 30;
            setcookie('usuario', $usuario['name'], $exp);
           
            header('Location: index.php');
        }

    }

    if(!$_SESSION) {
        $_SESSION['erros'] = ['Usuário/Senha Inválido!'];
    }
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
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Curso PHP</title>
</head>

<body class="login">

    <!-- Cabeçalho-->
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja bem vindo</h2>
    </header>
    <!-- Navegação Exercicios -->

    <!-- Conteudo Principal-->
    <main class="principal">
        <div class="conteudo">
            <h3>Identifique-se</h3>
            <?php if($_SESSION['erros']): ?>
            <div class="erros">
                <?php foreach($_SESSION['erros'] as $erro): ?>
                <p><?= $erro ?></p>
                <?php endforeach ?>
            </div>
            <?php endif ?>
            <form action="#" method="post">
                <div>
                    <label for="email">E-mail</label>
                    <input type="text" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <div class="div_button">
                    <button>Entrar</button>
                </div>

            </form>
        </div>
    </main>

    <!-- Rodape-->
    <footer class="rodape">
        <!-- d m Y -->
        COD3ER & ALUNOS @ <?= date('Y'); ?>
    </footer>

</body>

</html>