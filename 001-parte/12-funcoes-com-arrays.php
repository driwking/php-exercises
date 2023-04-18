<?php
 /*
    array_unshift($arr, "valor") adciona um ou mais elementos no inicio do array
    array_push($array, 'valor', 'valor') adiciona um ou mais elementos no final do array
    array_combine($keys, $values) mesclar dois arrayas passados
    array_sum() calcula a soma dos indices de um array
    explode("/", "03/07/2010") tranforma string em array
    implode("-",$array) tranforma array em string
 */
$nomes = array('eu'=>'Andriw','alguem'=>'Jorge','desconhecido   '=>'Marcos');
$carros = ['GOL GTI', 'Mustang', 'Porshe'];
$motos = ['suszuki','x1','pcx'];

// array_unshift

echo array_unshift($nomes,'Roberto')."<hr>";
array_unshift($nomes, $carros); // colocando um array no array, ou mais valores pelo array
print_r($nomes)."<hr>";
echo "<hr>";


// array_push

echo array_push($motos, 'yamaha','bis');
echo "<hr>";
print_r($motos);

// array_combine

echo "<hr>";
$keys = ['musicas','dancas','arte'];
$values = ['mpb','hip-hop','vangog'];
$gostos = array_combine($keys,$values); // combinando os indices, keys, com os elementos, values
print_r($gostos);


//array_sum

echo "<hr>";
$soma = array(1=>10,"2"=>20,4=>30,"nome"=>'string'); // soma apenas os numeros, os indices nao interferem
echo array_sum($soma);




// explode

echo "<hr>";

$data = "10/04/2015";
$novaData = explode("/",$data); // explode(delimeter,string), passamos parametros de divisao no delimeter, e na string a variavel que vai se tornar array
print_r($novaData);

echo "<hr>";
$frase = "testando o explode";
$lista = explode(" ",$frase);
print_r($lista);



// implode // no separador ele adiciona o que eu colocar, espaço, virgula o que for

echo "<hr>";

$caracter = implode(', ' ,$values); // transforma em string o array. Se ele nao estiver combinado junto de outro array antes da execusao desse codigo, dara certo, caso contrario nao
echo $caracter;


?>