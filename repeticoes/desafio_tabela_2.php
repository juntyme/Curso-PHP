<div class="titulo">Desafio Tabela #2</div>
<?php

?>
<form action="#" method="post">
    <div>
        <label for="linhas">Linhas</label>
        <input type="number" name="linhas" id="linhas" value="<?= $_POST['linhas'] ?? 10 ?>">
    </div>
    <div>
        <label for="colunas">Colunas</label>
        <input type="number" name="colunas" id="colunas" value="<?= $_POST['colunas'] ?? 10 ?>">
    </div>
    <button>Gerar Tabela</button>
</form>

<?php
$linhas = intval($_POST['linhas']);
$colunas = intval($_POST['colunas']);

if (!$linhas) $linhas = 10;
if (!$colunas) $colunas = 10;

$num = 1;
echo '<table>';
for ($i = 0; $i < $linhas; $i++) {
    echo '<tr>';
    for ($j = 0; $j < $colunas; $j++) {
        echo "<td>$num</td>";
        $num++;
    }
    echo '</tr>';
}
echo '</table>';
?>

<style>
form * {
    font-size: 1.8rem;
}

form>div {
    margin-bottom: 10px;
}

table {
    border: 1px solid #444;
    border-collapse: collapse;
    margin: 20px 0px;
}

table tr {
    border: 1px solid #444;
}

table tr.cor {
    background-color: lightblue;
}

table td {
    padding: 10px 20px;
}
</style>