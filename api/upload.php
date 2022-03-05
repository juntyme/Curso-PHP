<div class="titulo">Upload</div>
<?php

print_r($_FILES);

if($_FILES && $_FILES['arquivo']) {
    $pastaUpload = __DIR__.'/';

    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload .$nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];

    if(move_uploaded_file($tmp, $arquivo)){
        echo "<br>Arquivo válido e enviado com sucesso.";
    } else {
        echo "<br>Erro no upload de arquivo.";
    }
}

?>
<style>
input,
button {
    font-size: 1.2rem;
}
</style>
<!-- Formulario com encode para suportar arquivos de upload -->
<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo" id="">
    <button>Enviar</button>
</form>