<?php
/** SUPERGLOBAIS
 * 
 *  $GLOBALS // usada para acessar as variaveis globais em qualquer lugar do scrpit
 *  $_SERVER // contem informaçoes sobre locais de scripts, caminhos
 *  $REQUEST
 *  $_POST
 *  $_FILES
 *  $_ENV
 *  $_COOKIE
 *  $_SESSION
 */


 // globals

 $x = 10;
 $y = 15;

 function soma(){
    // echo $x + $y; // assim a varaiavel estara indefinida
    echo $GLOBALS['x'] + $GLOBALS['y']; // forma certa de acessar a variavel de qualquer local, o globals[] converte em uma var global onde ela for utilizada
 }

 soma();
 echo "<hr>";




 // _SERVER

echo $_SERVER['PHP_SELF']."<BR>"; // traz o caminho desse arquivo
echo $_SERVER['SERVER_NAME']."<BR>"; // NOME DO HOST
echo $_SERVER['DOCUMENT_ROOT']."<BR>";
echo $_SERVER['SERVER_PORT']."<BR>";
echo $_SERVER['REMOTE_ADDR']."<BR>";

?>