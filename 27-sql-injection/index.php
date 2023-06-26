<!-- injeçao de  uma query no banco de dados com um delete, ou remove de dados ou tabela -->


<?php

$connect = mysqli_connect('localhost','root',"",'user',3308);

if(isset($_POST['envio'])){
    
    if(!empty($_POST['name'])){
        $nome =  $_POST['name'];
        $sql = "SELECT * FROM usuarios WHERE nome = $nome";
        $insert = "INSERT INTO usuarios(name) VALUES('$nome')";
        mysqli_query($connect,$insert);
        echo"<h1>enviado</h1>";
    }else{
        echo"<h1>digite um nome</h1>";
    }

}else{
    echo"<h1>envie os dados</h1>";
}




?>

<form action="index.php" method="post">

<table>name</table> <input type="text" name="name" id="name" placeholder="insira seu nome"> 

<button type='submit' name='envio'>enivar</button>
<!-- 1 AND DROP TABLE XXX  -> sql injection --> 


</form>