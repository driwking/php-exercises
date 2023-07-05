<?php

// Manipulação de Arquivos

/*
fopen() - abrir arquivo e sua permissão
fclose() - fechar arquivo
fwrite() - escrever no arquivo e seu conteudo
!feof() - verificar o final do arquivo
fgets() - obter conteudo do arquivo
filesize() - tamanho do arquivo

*/

$arquivo = 'arquivos/arquivo.txt'; // criando ou enviando o caminho do arquivo
$conteudo = "conteudo de teste\r\n"; // \r e \n são quebras de linhas
$tamanhoArquivo = filesize($arquivo); // tamanho em bits

$arquivoAberto = fopen($arquivo, 'r'); //nome do arquivo, modo que são representadas por letras , 'a' serve para escrita
// r - read para leitura

//fwrite($arquivoAberto, $conteudo ); // parms:o arquivo aberto e conteudo a ser escrito nele


while(!feof($arquivoAberto)): //enquanto final do arquivo for falso

    $linha = fgets($arquivoAberto); // obtendo linhas do arquivo
    echo $linha."<br>";

endwhile;

fclose($arquivoAberto); // fechando arquivos




?>