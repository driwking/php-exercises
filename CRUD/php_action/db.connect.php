<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";
$port = 3306;

$connect = mysqli_connect($servername, $username, $password, $dbname, $port);
$GLOBALS['connect'];
mysqli_set_charset($connect, "utf8");


if(mysqli_connect_error()){
    echo "erro na conexão: ".mysqli_connect_error();
}else{
    echo "<script> console.log('code: 200')</script>";
}

?>