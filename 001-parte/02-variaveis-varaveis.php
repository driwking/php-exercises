<!-- variaveis dinamicas -->

<?php 

$bebida = "refrigerante";
// o cifrao cifrao altera o nome da variavel para o valor que ela recebeu


$$bebida = "Coca-cola"; // de $bebida passa a ser $refrigerante
echo $bebida; // vai exibir refigerante
echo $refrigerante; // exibe coca-cola
/////////////////////////////////////

$destino = "cidade";
$$destino = "Sao luis";

echo "<br>";
echo $cidade;

// esses conceitos recebem o nome de variaveis dinamicas ou variaveis variaveis
?>