<?php
// conexao
require_once 'db_connect.php'; // faz um requequimento no arquivo inserido

// Sessao
session_start(); // iniciando uma sessao

 // php procedural - um paradgma - usado para indicar os procedimentos para os software um objetivo

 // Boatao verifca se foi clicado
 if(isset($_POST['login']) && isset($_POST['senha'])):

    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']); //filtrando dados pela funcao myqli_escpe_string a  // primeiro parametro
    $senha = mysqli_escape_string($connect, $_POST['senha']); // filtrando a senha
    
    if(empty($login) or empty($senha)): // verifica se  os campos estao vazios
        $erros[] = "<li> O  campo login/senha precisa ser preenchido </li>";
    
    else:
        $sql = "SELECT login FROM  usuarios WHERE login = '$login'"; // verificando se existe o login na tabela usuarios
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0): 
            
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);

                if(mysqli_num_rows($resultado) == 1):
                    echo "ok";
                    $dados = mysqli_fetch_array($resultado);
                    mysqli_close($connect);
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    header('Location: home.php');
                else:
                    $erros[] = "<li> usarios e senha nao conferem </li>";
                endif;

        else:
            $erros[] = "<li> usuario inexistente</li>";
        endif;

    endif;
endif;



?>

<html>
<body>
<head>
    <title>Login</title>
    <meta charset="utf-8">
</head>

<h1>Login</h1>
<!-- por padrao se nao for colocado o caminho o action executa o propio arquivo -->
<?php

    if(!empty($erros)):
        foreach($erros as $erro):
            echo $erro;
        endforeach;
    endif;


?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST"> 

Login: <input typy="text" name="login"><br>
Senha: <input type="password" name="senha"><br>  <!-- senha = " " -->
<button type="submit" name="btn-entrar"> Entrar </button>


</form>

</body>
</html>
