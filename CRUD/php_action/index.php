<!-- materilaze -->

<?php
//sessão
session_start();
if(isset($_SESSION['mensagem'])){ ?>
<script>
    //Mensagem 
    window.onload = function(){
        M.toast({html: '<?php echo $_SESSION['mensagem'];?>'})
    };
</script>
    
<?php
}
session_unset();

//conexão
require_once "db.connect.php";

include_once 'C:\xampp\htdocs\php\phpcurso.com\CRUD\includes\headers.php';

include_once 'C:\xampp\htdocs\php\phpcurso.com\CRUD\includes\footer.php';




?>

<div class="row">
    <div class="col s12 m6 push-m3 ">
        <h3 class="light">Clientes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Email:</th>
                    <th>Idade:</th>


                </tr>
            </thead>
            <tbody>
                <?php
                    $sql ="SELECT * FROM clientes";
                    $resultado = mysqli_query($connect, $sql);
                    if(mysqli_num_rows($resultado)> 0){
                    while($dados = mysqli_fetch_array($resultado)):
                    
                    ?>
                <tr style="height:70px">
                    
                    <td><?php echo $dados['nome']?></td>
                    <td><?php echo $dados['sobrenome']?></td>
                    <td><?php echo $dados['email']?></td>
                    <td><?php echo $dados['idade']?></td>
                    <td><a href="editar.php?id=<?php echo $dados['id']?>" class="btn-floating  orange"><i class="material-icons">edit</i>
                    </a></td>
                    
                    <td style="padding: 15px 0 0 5px">
                        <form action="delete.php" method="POST" >
                        
                            
                            <input type="hidden" name="id" value="<?php echo $dados['id']?>">
                            <button href="#modal<?php echo $dados['id']?>" class="btn-floating red" name="btn-delete"><i class="material-icons">delete</i></button>
                            
                    
                        </form>

                    </td>
                    
                    <!-- Modal Trigger -->
        

                    <!-- Modal Structure -->
                    <div id="modal<?php echo $dados['id']?>" class="modal">
                    <div class="modal-content">
                        <h4>Deseja excluir o cliente?</h4>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                        <form action="delete.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $dados['id']?>">

                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Sim</a>

                        </form>
                    </div>
                    </div>
                    </a></td>
                  
                </tr>  
                    <?php 
                    endwhile;
                    }else{
                    ?>
                    <tbody>
                    <tr style="height:70px">
                        <td></th>
                        <td></td>
                        <td></td>
                        <td></td>


                    </tr>
                    </tbody>

                    <?php
                    }
                    ?>
            </tbody>
            <br>
            <a href="adicionar.php" class="btn">adicionar cliente</a>
        </table>
    </div>
</div>

<?php


?>