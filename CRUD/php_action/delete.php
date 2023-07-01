<?Php
session_start();

if(isset($_POST['btn-delete'])){

    require_once 'db.connect.php';
    $id = mysqli_escape_string($connect,$_POST['id']);

    $sql = "DELETE FROM clientes WHERE id = $id";

    if(mysqli_query($connect, $sql)){
        $_SESSION["mensagem"] = "deletado com sucesso";
        header("location: index.php");
    } 
}

?>