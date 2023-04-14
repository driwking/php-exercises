<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
<!-- os dados serao incorporados pelo protocolo de dados http, pelo metodo post do php -->
<form action="get.php" method="GET"> 
    Nome: <input type ="text" name="nome"><br>
    <br>
    Email: <input type ="email" name="email"><br>
    <br>
    <input type="submit" name="botao">
</form>
<br><a href="get.php?idade=17&nome=andriw"> enviar dados </a> <!-- a interrogacao passa os parametros: idade e nome -->
</body>

</html>