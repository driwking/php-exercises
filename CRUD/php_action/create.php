<?php
//sessão
session_start();
//conexão
require_once "db.connect.php";
require_once 'clear.php';


if(isset($_POST['cadastrar'])){


        $nome = clear($_POST['nome']) ;
        $sobrenome = clear($_POST['sobrenome']);
        $email = clear($_POST['email']);
        $idade = clear($_POST['idade']);




        
    

            $sql = "SELECT * FROM clientes WHERE nome='".$nome."' and sobrenome = '".$sobrenome."' and email ='".$email."' and idade ='".$idade."'";
            if(mysqli_num_rows(mysqli_query($connect,$sql)) == 1){
        
               echo " <br> cadastro existente";
               header('Location: index.php');
               $_SESSION['mensagem'] = "Erro ao cadastrar";
               
            }else{
                $sql = "INSERT clientes(nome,sobrenome,email,idade) VALUES('".$nome."','".$sobrenome."','".$email."','".$idade."')";             mysqli_query($GLOBALS['connect'],$sql);
                echo "<br> cadastro realizado!";
                header('Location: index.php');
                $_SESSION['mensagem'] = "cadastrado com sucesso!";
            }
        
            
}else{
    header("location: index.php");
}


?>
