<html>
<body>

<?php

// $_FILES -> SUPERGLOBAL, GUARDA AS INFORMACOES DE ARQUIVOS

if(isset($_POST['enviar-formulario'])):

        $formatosPermitidos  = array("png","jpeg","gif","jpg"); // colocando os nomes dos fromatos dos arquivos em um array
        $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION); /// pahtinfo retorna informaçoes de um array, seu caminho, nome, extensao, ur.
        // $_FILES recebe as informaçoes do input arquivo, e o name e o indice que ele retorna o seu valor.o PATHINFO_EXTESION traz a extensao do arquivo
        echo $extensao."<hr>";

        if(in_array($extensao, $formatosPermitidos)): // verifica se existe o formato que for enviado no array $formatosPermitidos
            $pasta = "arquivos/"; // caminho que sera salvo, na pasta arquivo.
            $temporario = $_FILES['arquivo']['tmp_name']; //o tmp_name retorna o nome do arquivo em um diretorio temporario do servidor, o name retorna o nome do arquivo do cliente
            $novoNome = uniqid().".$extensao"; // uniqid gera um novo id unico, com a extensao nova
            if(move_uploaded_file($temporario, $pasta.$novoNome)): // move o arquivo para um local selecionado
                $mensagem = "upload feito com sucesso";
            else:
                $mensagem = "Erro, nao foi possivel fazer o upload";
            endif;
        else:
            $mensagem = "Formato invalido";
        endif;

endif;
echo $mensagem;
?>


<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST"
    enctype="multipart/form-data"> <!-- enctype eniva dados pelo protocolo http para algum lugar definido pelo action, e com o method requirido  -->

    <input type="file" name="arquivo">
    <input type="submit" name="enviar-formulario">

</form>

</body>
</html>