<?php
/* LACO DE REPETICAO WIHLE - DO - WHILE, Faça Enquanto */

$contador = 1;

//WHILE

while ($contador <= 10): // enquanto a condicao for verdadeira ele ira rodar

    echo "contador e $contador<br>";
    $contador++;

endwhile; // podemos usar uma escrita alternativa, com abre e fecha chaves while (){}, em vez do endwhile.

echo"<hr>";

$contador = 1;
// DO - WHILE

do { // a verificaçao ocorre depois, e executa primeiro o codigo

    echo "contador e $contador<br>";
    $contador++;
}   while ($contador >= 10);

?>