<div class="titulo"></div>
<?php

//// Quantidade de segundo deste 1970 INT
echo time(). ' - Brasilia <br> ';

/// 3 horas a mesnos String
echo date('D, d  \s\e M \d\e Y H:i A '). '<br>';

/// Converter data em formato string
echo strftime('%A, %d de %B de %Y', time()) . '<br>';

/// Setar o time Brasil
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

echo strftime('%A, %d de %B de %Y', time()) . '<br>';

$amanha = time() + (24 * 60 * 60);
echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';

/// Data acrescentado de uma semana
$proximaSemana = strtotime('+1 week');
echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';


            /// hora, minuto, segundo, mês, dia, ano
$datarfixa = mktime(15, 30, 50 , 1 , 25, 1975);
echo strftime('%A, %d de %B de %Y - %h:%M:%S ', $dataFixa);