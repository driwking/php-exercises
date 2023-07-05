<?php
//utilizando os cookies, arquivo de texto criado pelo servidor no pc do usuario

//COOKIE
setcookie('user','Andriw Aparecido', time()+3600); // -> 3 paramentros, 1- o nome do cookie, 2 - o valor, 3 - a quantidade de tempo que ficar armazenado
setcookie('email','andriw1919@gmail.com', time()+3600);
setcookie('ultima_pesquisa','bola de basquete'.time()+3600);


var_dump($_COOKIE); // -> fica armazenadas na superglobal $_COOKIE
echo $_COOKIE['ultima_pesquisa'];

?>
