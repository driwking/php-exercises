<?php

/*      operadores de comparacao

    == igual
    != diferente
    ==== o mesmo que
    !== nao identico
    <> <> diferente
    < menor que
    > maior que
    <= menor igual
    >= menor igual
    <=> space ship, retorna 3 valores, se o lado esquerdo for menor ele retorna -1, se o lado direito for menor ele retorna 1, e se forem igual retorna 0


*/

if(10 == 10):
    echo" Positivo";
else:
    echo" Negativo";
endif;
echo "<hr>";


if(10 != "10"):
    echo" Positivo";
else:
    echo" Negativo";
endif;
echo "<hr>";

if(10 === 10):
    echo" Positivo";
else:
    echo" Negativo";
endif;
echo "<hr>";


if(10 !== "10"):
    echo" Positivo";
else:
    echo" Negativo";
endif;
echo "<hr>";

if(10 <> 13):
    echo" Positivo";
else:
    echo" Negativo";
endif;
echo "<hr>";


if(10 > 4):
    echo" Positivo";
else:
    echo" Negativo";
endif;
echo "<hr>";

if(10 < 15):
    echo" Positivo";
else:
    echo" Negativo";
endif;
echo "<hr>";

if(10 >= 1):
    echo" Positivo";
else:
    echo" Negativo";
endif;
echo "<hr>";


if(10 <= 12):
    echo" Positivo";
else:
    echo" Negativo";
endif;
echo "<hr>";

var_dump(1<=>10);
echo "<hr>";




?>