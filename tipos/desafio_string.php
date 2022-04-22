<div class="titulo">
    Desafio String
</div>

<?php

/// Enunciado:
// Avaliando os métodos da documentação da string
// qual o método que a posição do texto 'abc'
// na string '!AbcaBcabc' retorn 1

echo strpos('!AbcaBcabc', 'abc') . '<br>'; ## Considera sensitive
echo stripos('!AbcaBcabc', 'abc') . '<br>'; ## desconsidera sensitive
echo stripos(strtolower('!AbcaBcabc'), strtolower('ABC')) . '<br>'; ## desconsidera sensitive