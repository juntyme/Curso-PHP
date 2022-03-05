<div class="titulo">Desafio Switch</div>
<?php

ini_set('display_errors', 1);

const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FAH = 1.8;

if(isset($_POST['conversao'])) {

$param = $_POST['param'] ?? 0;

switch($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param KM = $distancia Milhas";
        break;

    case 'milha-km':
         $distancia = $param / FATOR_KM_MILHA;
         $mensagem = "$param Milhas = $distancia km";
         break; 

    case 'metro-km':
         $distancia = $param / FATOR_METRO_KM;
         $mensagem = "$param Metro = $distancia km";
         break;
           
    case 'km-metro':
         $distancia = $param * FATOR_METRO_KM;
         $mensagem = "$param KM = $distancia metros";
         break;

    case 'cel-fah':
        $conversao = $param * FATOR_CEL_FAH + 32;
        $mensagem = "{$param}º Celsius = {$conversao}º Fehrenheit";
         break;

    case 'fah-cel':
        $conversao = ($param - 32) * 1 / FATOR_CEL_FAH;
        $mensagem = "{$param}º Fehrenheit = {$conversao}º Celsius";
        break;

    default:
        $mensagem = "Nenhum valor calculado!";
}

}

?>

<form action="#" method="post">
    <input type="text" name="param" id="">
    <select name="conversao" id="conversao">
        <option value="km-milha">KM > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="cel-fah">Celsius > Fahrenheit</option>
        <option value="fah-cel">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>

    <!-- Opção para button -->
    <input type="submit" value="Converter">
</form>
<style>
form>* {
    font-size: 1.8rem;
}
</style>

<?php
echo $mensagem;
?>