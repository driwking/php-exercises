<!-- ARRAYS -->
<?php

//ARRAYS
$carros = array("BMW","HILUX","GOL","SUPRA"); //array criar um array, uma lista.
print_r($carros); //printa a lista inteira, o echo ou o print normal nao exibem ela inteira.
echo"<hr>";
echo $carros[0]; // no echo, ou print so podemos exibir pelo indices. o zero sera sempre o primeiro.


// atribuindo indices no arrays e adicionando novos elementos

echo "<hr>";
$compras = array(1=>'Arroz',2=>'Feijao',3=>'Macarrao'); // o sinal igual maior atribuir os indices que desejarmos aos itens.
$compras[] = 'Batata'; // alocando novo valor na lista.
$compras[10] = 'Bolacha'; // adicionando item em certa posicao
print_r($compras);
echo"<hr>";

// criando listas sem o comando array
$lista = ['Posicao 1', 'Posicao 2', 'Posicao 3'];
print_r($lista);

?>