<?php

$valor = 20;

echo $valor++; // valor vai ser 21, mas nao ira exbir como 21, pois esta em um pos-incremento, ira printar depois efetuar a operacao
echo"<br>";
echo $valor; // 21
echo"<br>";
echo ++$valor; // pre-incremento, soma a var valor com mais , por estar somando antes ++valor, e mostrara o resultado depois da operacao
echo"<br>";
echo $valor;

?>