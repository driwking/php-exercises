<?php
//conexão
require_once "db.connect.php";

//header
include_once 'C:\xampp\htdocs\php\phpcurso.com\CRUD\includes\headers.php';
//footer
include_once 'C:\xampp\htdocs\php\phpcurso.com\CRUD\includes\footer.php';
session_start();


if(isset($_GET['id'])){

    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql ="SELECT * FROM clientes WHERE  `id` = $id";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado)
    
    ?>
    
    <div class="row">
        <div class="col s12 m6 push-m3 ">
            <h3 class="light">Editar cliente</h3>
            <form action="update.php" method="POST">
                <input type="hidden" value='<?php echo $dados['id']?>' name="id">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value='<?php echo $dados['nome']?>'>
                <table for="nome">Nome</table>
            </div>
            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome" value='<?php echo $dados['sobrenome']?>'>
                <table for="sobrenome">Sobrenome</table>
            </div>
            <div class="input-field col s12">
                <input type="email" name="email" id="email" value='<?php echo $dados['email']?>'>
                <table for="email">Email</table>
            </div>
            <div class="input-field col s12">
                <input type="text" name="idade" id="idade" value='<?php echo $dados['idade']?>'>
                <table for="idade">Idade</table>
            </div>
            
            <button type="submit" class="btn" name="btn-atualizar">Atualizar</button>
            <button href="index.php" type="submit" class="btn green" name="listar-clientes"> Lista de clientes</button>
            
            </form>
        </div>
    </div>

<?php
}else{
    header("location: index.php");
}



?>
