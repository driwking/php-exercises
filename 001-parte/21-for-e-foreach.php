<?php
// FOR E FORAECH

for ($contador = 0; $contador <= 10; $contador++): // for(intanciando variavel, condicao, incremento)
    echo "o contador e $contador<br>";

endfor;
echo "<hr>";
// FOREACH

//utilizado para percorrer os arrays

$cores= ['azul','rosa','verde'];

foreach($cores as $indice => $valor): // para cada // o primeiro paramentro e o array, e o segundo o valor. Para cada item do array ele atribui a var valor
// para exibir os indices e os valores coloca o paramentro dos indices => e o a variavel que recebera o valor desse indice.
    echo $indice." - ".$valor."<br>";

endforeach;





?>