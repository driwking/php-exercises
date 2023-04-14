<?php
/*
is_array($array) verififca se uma determinada variavel e um array
in_array($valor, $array) verifica se um determinado valor existe em alguma posicao do array
array_keys($array) cria um novo array com os indices da lista desejada
*/

$nomes = array('eu '=>'Andriw','alguem'=>'Jorge','desconhecido'=>'Marcos'); 

if(is_array($nomes)): // verifica se e uma lista
    echo "E um array";
else:
    echo "Nao e um array";
endif;
echo"<hr>";



if(in_array("Andriw",$nomes)): // valor que desejo procura na lista e o nome da lista
    echo"Existe na lista";
else:
    echo"Nao existe";
endif;
echo"<hr>";


array_keys($nomes); //salvando os indices dos nomes como chaves
$tes = (array_keys($nomes)); //salvando os indices dos nomes como chaves na var tes
print_r($tes);


?>