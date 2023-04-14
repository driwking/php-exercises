<?php
/**Funcoes para string
 * 
 * strtoupper converter em maiusculas
 * strtolower converte em minuscula
 * substr retorna a partir do numero especififcado caracteres
 * str_pad adciona caracters 
 * str_repeat repete a string
 * strlen retorna o comprimento 
 * str_replace altera uma palavara em um texto
 * strpos retorna a posicao de uma palavra  em um texto
 * 
 * 
 * 
 */

$nome = "Andriw Aparecido";
$novonome = strtoupper($nome);
echo $novonome;
echo "<hr>";

$mensagem = "Hellow world!";
echo substr($mensagem, 4,4); // retorna a var a partir do 4 caracter, o segundo 4 e o comprimento, vai retornar os 4 caracteres.
echo "<hr>";

$objeto = "mouse";
$recebeObjeto = str_pad($objeto, 9,"*"); // adciona mais caractereres e tipo de caracteres se for especificado
echo $recebeObjeto;


// str_repeaet
echo "<hr>";

$string = str_repeat($nome,2); // repete a quantidade de string, pelo numero de vezes
echo $string;


// strlen
echo "<hr>";
echo strlen($mensagem); // quantidade de caracteres


// str_replace
echo "<hr>";
$texto = "A selecao do Japao sera campeao mundial da copa de 2022.";
$novoTexto = str_replace("Japao","Brasil",$texto); // subtitui uma palavra em um texto
echo $novoTexto;


// strpos

echo "<hr>";

echo strpos($texto, "Japao"); // retorna a posicao da palavra copa no texto
?>