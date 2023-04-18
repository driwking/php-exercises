
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
/**VALIDAÇOES - FILTROS
 * FUNÇOES (FILTER_INPUT - FILTER_VAR)
 FILTER_VALIDATE_INT
 FILTER_VALIDATE_EMAIL
 FILTER_VALIDATE_FLOAT
 FILTER_VALIDATE_IP
 FILTER_VALIDATE_URL
 
 */



 if(isset($_POST['enviar-formulario'])):  //isset verifica se existe o indice enviar-formulario no $_POST, quando clicar
    // echo "Enviou";
    // var_dump($_POST);

// array erros para recber os erros
    $erros = array();


// verificando erros
    if(!$idade = filter_input(INPUT_POST,'idade', FILTER_VALIDATE_INT)): // filtert_input serve para ferificar se um evento e verdadeiro, nesse caso verifica se o valor recebido pelo input idade e inteiro, e executa no if caso seja
    // no filter_input, primeiro e o tipo de input a ser verificado, depois o campo, e por ultimo a condicao
        $erros[] = "idade precisa ser um inteiro";
        // print_r($erros);
    endif;


    if(!$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL)): // filtert_input serve para ferificar se um evento e verdadeiro, nesse caso verifica se o valor recebido pelo input email e um email, e executa no if caso seja
        // no filter_input, primeiro e o tipo de input a ser verificado, depois o campo, e por ultimo a condicao
        $erros[] = "email invalido";
            // print_r($erros);
        endif;

    if(!$peso = filter_input(INPUT_POST,'peso', FILTER_VALIDATE_FLOAT)): // filtert_input serve para ferificar se um evento e verdadeiro, nesse caso verifica se o valor recebido pelo input peso e um float, e executa no if caso seja
    // no filter_input, primeiro e o tipo de input a ser verificado, depois o campo, e por ultimo a condicao
        $erros[] = "peso errado, colocar com ponto";
        // print_r($erros);
    endif;

    
    if(!$ip = filter_input(INPUT_POST,'ip', FILTER_VALIDATE_IP)): // filtert_input serve para ferificar se um evento e verdadeiro, nesse caso verifica se o valor recebido pelo input ip e um ip, e executa no if caso seja
        // no filter_input, primeiro e o tipo de input a ser verificado, depois o campo, e por ultimo a condicao
        $erros[] = "ip invalido";
            // print_r($erros);
    endif;
    
    
    if(!$url = filter_input(INPUT_POST,'url', FILTER_VALIDATE_URL)): // filtert_input serve para ferificar se um evento e verdadeiro, nesse caso verifica se o valor recebido pelo input url e uma url, e executa no if caso seja
        // no filter_input, primeiro e o tipo de input a ser verificado, depois o campo, e por ultimo a condicao
        $erros[] = "URL incorreta";
            // print_r($erros);
    endif;


// Exibindo mensagens
    if(!empty($erros)):
        foreach($erros as $erro):
            echo "<li> $erro </li>";
        endforeach;
    else:
            echo "Dados corretos";
    endif;
    // $idade = $_POST['idade'];
    // echo "<hr>";
    // echo $idade;
    // echo "<hr>";
// else:
//     echo"nao";
endif;



?>



<!-- os dados serao incorporados pelo protocolo de dados http, pelo metodo post do php -->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST"> 
    idade: <input type ="text" name="idade"><br>
    <br>
    Email: <input type ="text" name="email"><br>
    <br>
    Peso: <input type ="text" name="peso"><br>
    <br>
    ip: <input type ="text" name="ip"><br>
    <br>
    url: <input type ="text" name="url"><br>
    <button type="submit" name="enviar-formulario">enviar </button><br>
</form>
<br><a href="get.php?idade=17&nome=andriw"> enviar dados </a> <!-- a interrogacao passa os parametros: idade e nome -->
</body>

</html>