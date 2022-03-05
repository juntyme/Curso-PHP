<div class="titulo">Desafio Tabela</div>
<?php

$matriz = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20']
];

foreach ($matriz as $linha) {
    foreach ($linha as $valor) {
        echo "$valor";
    }
    echo "<br>";
}

?>
<!-- Tabela Simples -->
<table>
    <?php foreach ($matriz as $linha) : ?>
    <tr>
        <?php foreach ($linha as $valor) : ?>
        <td>
            <?= $valor ?>
        </td>
        <?php endforeach ?>
    </tr>
    <?php endforeach ?>
</table>

<!-- Tabela Zebrada -->
<table>
    <?php foreach ($matriz as $chave => $linha) : ?>
    <tr <?= $chave % 2 !== 0 ? 'class="cor"' : '' ?>>
        <?php foreach ($linha as $valor) : ?>
        <td>
            <?= $valor ?>
        </td>
        <?php endforeach ?>
    </tr>
    <?php endforeach ?>
</table>


<style>
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