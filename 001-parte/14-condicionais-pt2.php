<?php

// CONDICIONAIS - SWITVH - CASE

$cor = "azu";

switch ($cor): // o que sera testado

    case "azul": // o teste, o caso
    echo "sua cor preferida e azul"; // caso seja verdade
    break; // sem o break a execusao do segundo e o primeiro case estara em ocorrencia

    case "rosa":
    echo "sua cor preferida e rosa";
    break;


    default: // equivalente ao else, sera executado se nenhum dos caso for verdadeiro
    echo "Sua cor prefirada nao e azul nem rosa";
endswitch;

?>