<div class="titulo">Desafio Operadores Lógicos</div>
<!--
    dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> tv 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nunhum for executado -> Fica em casa mais saudável!
-->
<?php
if(isset($_POST['t1']) && isset($_POST['t2'])) {

$trabalhoTerca = (!!$_POST['t1']);
$trabalhoQuinta = (!!$_POST['t2']);

if($trabalhoTerca && $trabalhoQuinta) {
    $resultado = "Familia compra TV 50' e toma sorvete";
}elseif($trabalhoTerca || $trabalhoQuinta) {
     $resultado = "Familia compra TV 30' e toma sorvete";
} else {
     $resultado = "Familia fica em casa mais saudável!";
}

}
?>

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
button,
select {
    font-size: 1.8rem;

}
</style>

<?php
echo  $resultado,  '<br>';
 var_dump($_POST['t1']);
var_dump($_POST['t2']);
?>