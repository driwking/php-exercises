<?php

// Expressões irreugulares 

// Define um padrão para prrocurar ou substituir palavras ou grupo de palavras.

// ^ inicia uma expressão, $ final da expressão - i - case sensitive. TUDO DENTRO DAS BARRAS //
// /^[]{}[]+ $/ --> exemplo 

// [] coloca dentro os conjuntos de caracteres --> [a-z][A-Z][0-9]
// {} inseri as ocorrências - ?{0,1}  *{0.} +{1,} --> quantas caracteres podem ser permitidos


$string = '@';
$padrao = "/^$/"; // qualquer valor inserido apenas entre - ^ $ - vai uma parte como o todo, somente a letra 'a' será encontrada se
// o que estiver sendo buscado começar com 'a', caso contrario não retorna um valor positivo.

$padrao = '/^[a-z-0-9]$/i'; //somente letras de a-z e de A-Z, procura um caraacter
// 0-9 numero de 0 até 9 // o i depois da barra significa sem ser case sentive

$padrao = '/^[a-z]{0,}[ ]{0,}[a-b]?$/i'; // --> {0,} representa a quantidade de caracteres aceitos, o espacaço é validado dessa forma [ ]
$padrao = '/^[a-z0-9.@]$/'; //para validar caracteres especias podem estar junto das outras validações, para o ifem é necessário usar as barras \-\ invertidas

if(preg_match($padrao, $string)){ // preg_match() executa o padrão na variavel
    echo "válido";  
    echo "<hr>";
    echo $string;

}else{
    echo "inválido";
    echo "<hr>";
}

echo "<hr>";

// VALIDAÇÃO DE EMAIL 

$string = 'contato-sim.teste@gmail.com.br';
$padrao = '/^[a-z0-9\-\._]+[@]{1}[a-z]+[.com.br]{7}$/i'; // --> o @ pode estar fora depois da quantidade de cartacteres informada se for mais de 1; exem: [a-z]+@[0-9]
$padrao = '/^[a-z0-9\-\._]+[@]{1}[a-z]+(.com|.br|.com.br|.net)$/i'; // o pipe (a|b|c) define que uma das alternativas está valida

if(preg_match($padrao, $string)){
    echo "válido";
    echo "<hr>";
    echo $string;
}else{
    echo "inválido";
}




?>