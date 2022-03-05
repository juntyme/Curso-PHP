<div class="titulo"> Tipo Booleano</div>
<?php
// Booleano não é case sensitive
echo True;
echo '<br>';
echo False;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump("false");
echo '<br>' .is_bool(false);
echo '<br>' .is_bool('false');

// Fazer as regras de conversões
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); /// converter para booleano apenas 0 pode ser convertido para false
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((float) 0); /// converter para float
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.00000001);
echo '<br>' . var_dump((bool) ''); //  false
echo '<br>' . var_dump((bool) ' '); // true
echo '<br>' . var_dump((bool) '0'); /// false
echo '<br>' . var_dump((bool) '00'); /// true
echo '<br>' . var_dump((bool) 'false'); /// true

echo '<br>' . var_dump(!!'false'); /// Dupla negação converte
