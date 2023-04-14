
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>

<?php
/**SANATIZAÇAO - FILTER - LIMPEZA
 * FUNÇOES (FILTER_INPUT - FILTER_VAR)
 * * FILTER_SANITIZE_SPECIAL_CHARS // limpa os codigos html
 * FILTER_SANITIZE_INT
 * FILTER_SANITIZE_EMAIL
 * FILTER_SANITIZE_URL
 */



 if(isset($_POST['enviar-formulario'])):  //isset verifica se existe o indice enviar-formulario no $_POST, quando clicar
    // echo "Enviou";
    // var_dump($_POST);

// array erros para recber os erros
    $erros = array();

// Sanitize e validaçoes com var, atribuindo os valores do input a uma var e utilizando ela
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS); // serve para a limpeza de html, nao deixa escapar os parametro html
    // echo $nome;
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT); // ele limpas qualquer caracter e deixa apenas o numero
    // echo $idade;
    if(!filter_var($idade,FILTER_VALIDATE_INT)):
        $erros[] = "numero Invalido, apenas inteiros";
    endif;
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    // echo $email;
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)):
        $erros[] = "email Invalido, apenas email";
    endif;
    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    // echo $url;
    if(!filter_var($url,FILTER_VALIDATE_URL)):
        $erros[] = "url Invalido, apenas links validos";
    endif;

// Exibindo mensagens
    if(!empty($erros)): // verifica se uma variavel esta vazia, retornando true caso nao exista
        foreach($erros as $erro):
            echo "<li> $erro </li>";
        endforeach;
    else:
            echo "Dados corretos";
    endif;


endif;



?>



<!-- os dados serao incorporados pelo protocolo de dados http, pelo metodo post do php -->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST"> 
    Nome: <input type ="text" name="nome"><br>
    <br>
    Idade: <input type ="text" name="idade"><br>
    <br>
    Email: <input type ="text" name="email"><br>
    <br>
    url: <input type ="text" name="url"><br>
    <button type="submit" name="enviar-formulario">enviar </button><br>
</form>
<br><a href="get.php?idade=17&nome=andriw"> enviar dados </a> <!-- a interrogacao passa os parametros: idade e nome -->
</body>

</html>