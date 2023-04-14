<html>
<head>
    <title>Pagina restrita</title>
    <meta charset="utf-8">
</head>
<body>

    <?php
    
    //  Conexao
    require_once 'db_connect.php';

    // Sessao
    session_start();

    // Verificao
    if(!isset($_SESSION['logado'])):
        header('Location: index.php');
    endif;

    $id = $_SESSION['id_usuario'];
    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
    mysqli_close($connect);
    ?>
    <h1>Ola <?php echo $dados['nome'];?></h1>
    <a href="logout.php"> sair </a>
</body>

</html>