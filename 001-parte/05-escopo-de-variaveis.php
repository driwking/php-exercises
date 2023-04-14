<?php
//ESCOPO GLOBAL

$nome = "Andriw Aparecido"; // a variavek foi definida no escopo global, 
//caso tente utilizar-la em outro lugar fora do escopo dara erro

$a = 1; // definindo variaveis no escopo global
$b = 3;
$c = 4;





function exibirNome(){ // a funcao e um escopo local;

    global $nome; // global mais a variavel que esta no escopo global, serve para traze-la para outro escopo.
    echo $nome;


};

exibirNome();
echo "<hr>";

/////////////////////

function exibiCidade(){

    // ESCOPO LOCAL 
    global $cidade;
    $cidade = "Sao Paulo"; // para ser acessada fora da funçao, tem que define ela como global


};

exibiCidade(); // chamando a funcao
echo $cidade; // exibindo a variavel $cidade do escopo local
echo "<hr>";


function soma(){
    global $a, $b, $c;

    echo $a + $b + $c .'<br><br>'; //somando as variaveis de escopo global, o ponto serve para concatenar.
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c']; // o $globals[] e um array associativo, onde o nome da variavel global torna a chave dos array.

};

echo soma();


?>