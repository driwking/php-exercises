<?php

//  Constantes sao valores unicos, que nao podem ser alterados durante a execusao do script.

define("NOME", "Andriw Aparecido"); //definindo uma constante o primeiro valor e o nome, o segundo o valor
//define("NOME", "JORGE"); --> vai dar erro
echo NOME;
ECHO "<hr>";

// outros tipos de dados
define("IDADE", 17);
define("ALTURA", 1.76);
define("VIVO", false);
$vivo;

if(VIVO == true): 
    global $vivo;
    $vivo = "sim"; 
elseif (VIVO == false): 
    $vivo = "nao";  
endif;

define("MUSICAS", ['Flor de lis','oceano','garota de ipanema']);

echo 'Meu nome e  '.NOME.',  minhda idade e  '.IDADE.'  minha altura e de  '.ALTURA.'  e estou vivo?  '.$vivo;
echo"<hr>";
echo "Minhas musicas favoritas sao: ".MUSICAS[0].' , '.MUSICAS[1].' e '.MUSICAS[2];

function exibirNome() { // as constante sao globais e podem ser acessadas de qualquer local,

    echo NOME;
};
echo "<hr>";
exibirNome();
?>
