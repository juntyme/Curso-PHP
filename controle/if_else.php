<div class="titulo">If & Else</div>
<?php

/// Resolve para verdadeiro e falso bool
/// Imprime apenas a primeira sentença seja apenas a linha ou {}
if(true) {
    echo "Serei impresso?<br>";
    echo "Serei impresso novamente?<br>";
}

if(false) {
     echo "verdadeiro - Parte A.<br>";
     echo "verdadeiro - Parte B.<br>";
} else if(true){
     echo "verdadeiro - Parte C.<br>";
     echo "verdadeiro - Parte D.<br>";
} else {
    echo "falso - Parte A.<br>";
    echo "falso - Parte B.<br>";
}
   

echo "fim";