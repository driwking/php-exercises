<?php
//sessão
session_start();
//conexão
require_once "db.connect.php";
require_once 'clear.php';

if(isset($_POST['btn-atualizar'])){


        $nome = clear($_POST['nome']) ;
        $sobrenome = clear($_POST['sobrenome']);
        $email = clear($_POST['email']);
        $idade = clear($_POST['idade']);
        $id = clear( $_POST['id']);
        $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = $id";
        
        $resultado = mysqli_query( $connect,$sql);
    
        
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
            
        header("location: index.php");    
            
}else{
    header("location: index.php");
}


?>
