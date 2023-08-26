<?php
// Conexao com o banco de dados
$servername = "localhost";
$username = "root";
$password = '';
$db_name = "test_db";
$porta = "3306";
$connect = mysqli_connect($servername, $username, $password, $db_name, $porta); // faz conexao com o banco de dados
//mysqli - tem suporte para programacao procedural e POO - evoluçao do mysqlquery, obsoleto

//mysqli_connect - conecta com o banco de dados, o primeiro parametro e para o nome do servidor, o segundo nome do usario do banco de dados, terceiro a senha do usario e por ultimo a porta do banco de dados

if(mysqli_connect_error()): // mysqli_connect_error() retorna o erro na conexao
    echo "Falha na conexao: ".mysqli_connect_error();
else: 
    echo "tudo certo chefe";
endif;




?>
