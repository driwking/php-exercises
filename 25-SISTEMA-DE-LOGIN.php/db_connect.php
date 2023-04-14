<?php
// Conexao com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "sistemalogin";
$porta = "3308";
$connect = mysqli_connect($servername, $username, $password, $db_name, $porta); // faz conexao co o banco de dados
//mysqli - tem suporte para programacao procedural e POO - evoluçao do mysqlquery, obsoleto


if(mysqli_connect_error()):
    echo "Falha na conexao: ".mysqli_connect_error();
else: 
    echo "tudo certo chefe";
endif;




?>
