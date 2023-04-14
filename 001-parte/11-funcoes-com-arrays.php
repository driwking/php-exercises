<?php
/*
 array_values($array) retorna um valor com os valores do array passado
 array_merge($array1, array2) agrega o conteudo de mais de 1 arrays
 array_pop($array) exclui a ultima posicao do array
 array_shift($array) exclui a primeira posicao do array

*/
$nomes = array('eu '=>'Andriw','alguem'=>'Jorge','desconhecido'=>'Marcos'); 

$valores = array_values($nomes); // passando os valores para um novo array mas nao passa os indices
print_r($valores);
echo '<hr>';


$carros = ['GOL GTI', 'Mustang', 'Porshe'];
$motos = ['suszuki','x1','pcx'];
print_r(array_merge($carros, $motos, $nomes)); // unindo os valores e exibindo eles
echo "<hr>";

// array_pop

echo array_pop($carros,)."<hr>"; //exibi o valor que foi excluido, o ultimo no caso
print_r($carros)."<hr>";
echo "<hr>";

// array_shift

echo array_shift($carros)."<hr>";
print_r($carros);

?>