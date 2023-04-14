<?php

//tipos de dados

/******** Escalares *******/

// strings : sequencia de nomes
$nome = "hello World!";

var_dump($nome); // funçao que mostra o tipo de dado de uma variavel. a quantidade de caracteres

if(is_string($nome)): // a funcao is_string verifica se a variavel ou o que ele receber e uma string, mas existe outras funcoes que fazem a verificao de outros tipos de dados como o is_int, is_float, assim por diante
    echo "E uma string";
else:
    echo "Nao e uma string";
endif;
echo "<hr>";


// int
$numero = 12;

var_dump($numero);

if(is_int($numero)):
    echo"E um inteiro";
else:
    echo"Nao e um inteiro";
endif;
echo "<hr>";


//florat
$altura = 1.76;

var_dump($altura);

if(is_float($altura)):
    echo "E um float";
else:
    echo"Nao e um float";
endif;
echo"<hr>";


// boolean
$admim = true;

var_dump($admim);

if(is_bool($admim)):
    echo "E um boleano";
else:
    echo"Nao e um boelano";
endif;
echo "<hr>";






/******** Compostos *******/

// array

$carros = array("Fiat", "Uno","Porshe",17,13.5,true);

var_dump($carros);

if(is_array($carros)):
    echo"E um array";
else:
    echo"Nao e um array";
endif;
echo"<hr>";



// object

class Cliente{
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome; // o comando this desclara o parametro como $nome
    }
}

$cliente = new Cliente(); // instanciando um objeto
$cliente -> atribuirNome("Andriw"); // atribuindo nome na class pela funcao atribuirNome
Var_dump($cliente);

if(is_object($cliente)):
    echo "E um objeto";
else:
    echo"Nao e um objeto";
endif;
echo "<hr>";

// Resource faz conexao com banco de dados, busca arquivos etc.

?>
