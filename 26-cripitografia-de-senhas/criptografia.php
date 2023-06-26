<?php

// base64 - criptografia de mao dupla, codifica e descodifica
$senha = "localhost";

// codificando a senha em base64
$novaSenha = base64_encode($senha);

echo "base64: ".$novaSenha."<br>";

// descodificando
echo "Sua senha e: ". base64_decode($novaSenha);




// md5 - criptografia de mao unica, sem descriptografia
echo "<hr>";
$novasenha = md5($senha); 

echo "md5: ".$novasenha."<br>";


//  sha1
echo "<hr>";
$novaSenha = sha1($senha);
echo "sha1: ". $novaSenha;



?>