<?php
// FUNCOES PARA NUMEROS
/**
 * number_format formata valores
 * round arredonda os valores
 * ceil arredonda os valores para cima
 * floor arredonda os valores para baixo
 * rand aleatoriza, sorteia os numeros
 */


$db = 1234.56;
$preco = number_format($db, 2, ",","."); // formata os numeros, primeiro e o valor ou a var, depois a quantidade de casas decimais,

echo " o valor do preço e  R$:$preco";
echo "<hr>";

// ROUND

echo round(5.3); // aredonda valores


// CEIL
echo "<hr>";
echo ceil(8.1); // arredonda para cima

// FLOOR
echo "<hr>";
echo floor(8.1); // arredonda para baixo



// RAND
echo "<hr>";
echo rand(10, 20); // o valor minimo e valor maximo

?>