<?php
// CONDICIONAIS - IF - ELSE - ELSEIF

$numero = "s";

if ($numero == 10):
    echo "E igual a 10";
elseif($numero !=  10 && is_numeric($numero)):
    echo "Nao e igual a 10, mas e um numero";
else:
    echo "nao e um numero";
endif;

echo '<hr>';

if($numero >= 10):
    echo 'Aprovado!';
elseif($numero <=7):
    echo 'reprovado';
else:
    echo'Recuperacao';
endif;

?>