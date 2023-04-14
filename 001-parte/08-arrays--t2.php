<?php

$carros = array("BMW","HILUX","GOL","SUPRA");
$compras = array(1=>'Arroz',2=>'Feijao',3=>'Macarrao');
$lista = ['Posicao 1', 'Posicao 2', 'Posicao 3'];

    // contando a quantidade de elementos nos arrays
echo count($carros).'<hr>'; // count, contar



$totalcarros = count($carros); // atribuindo a uma var a quantidade de elementos de um array
echo $totalcarros.'<hr>';


// FOREACH - para cada, percorre o array e seus elementos.

foreach($compras as $valor) { // praticamente o que ocorre: a variavel valores recebe os elementos da lista compras, e depois sao exebidas pelo o echo

    echo $valor.'<br>';

};







?>