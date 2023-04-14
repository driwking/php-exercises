<?php
    /* OPERADORES LOGICOS
    E (&& - and)
    OU (|| - or)
    ou exclusivo (xor) // retorna se apenas uma das sentenças forem verdaddeiras, se forem as duas verdadeiras ou falso dara errado
    negacao(!) nega a sentença, se for verade fica falso, se for falso fica verdadeiro


    */
    $idade = 17;
    $nome = "andriw";

    if(($idade == 13 ) xor ($nome = "andriw") && (2 == 2)):
        echo"verdade";
    else:
        echo"falso";
    endif;


?>