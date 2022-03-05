<div class="titulo">Desafio Imagens</div>
<?php
session_start();

ini_set('display_errors', 1);

$arquivos = $_SESSION['arquivos'] ?? [];

if (!empty($_FILES['arquivo'])) {

    $pastaUpload = __DIR__ . '/../files/';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];

    if (move_uploaded_file($tmp, $arquivo)) {
        echo "<br>Arquivo válido e enviado com sucesso.";
        $arquivos[] = $nomeArquivo;

        $_SESSION['arquivos'] = $arquivos;
    } else {

        echo "<br>Erro no upload de arquivo!";
    }
}
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo" id="" accept=".png">
    <button>Enviar</button>
</form>
<ul>
    <?php foreach ($arquivos  as $arquivo) : ?>
        <?php if (stripos($arquivo, '.png') > 0) : ?>
            <li>
                <img src="http://localhost/curso_php/files/<?= $arquivo; ?>" alt="" width="300px">
                <a href="http://localhost/curso_php/files/<?= $arquivo; ?>"><?= $arquivo; ?></a>
            </li>
        <?php endif ?>
    <?php endforeach ?>
</ul>
<style>
    input,
    button {
        font-size: 1.2rem;
    }
</style>