<div class="titulo">Operações Aritiméticas</div>
<?php

// OBS Operadora  UNÁRIOS precisa deapenas um operando
// Operação  BINÁRIOS dois operando
// Operação  TERNÁRIOS usa 3 operando

echo 1 + 1, '<br>'; // Soma interios
var_dump(1 + 1);
echo '<br />';
echo 1 + 2.5, ' Adição<br>';  # Adição
echo 10 -2, ' Subtração<br>'; # subtração
echo 2 * 5, ' Multiplicação<br>'; # multiplicação
echo 7 / 4, ' Divisão<br>'; # divisão
echo intdiv(7, 4), ' <br>'; # divisão resultado numero inteiro trunca o valor
echo round(7 / 4), '<br>'; # função nativa arredonda o resultado
echo 7 % 4, '<br>'; ## Modulo retorna o resultado
echo 7 / 0.0001, '<br>'; # com zero tende ao infinito INF
// echo intdiv(7, 0), '<br>'; # erro
echo 4 ** 2, '<br>';

// PRECEDENCIA DE OPERADORES
// () => ** => / * % => + -

echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo ((2 + 3) * 4) ** 2;