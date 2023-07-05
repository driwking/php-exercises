<?php
// DATAS
echo date('D')."<hr>"; // -> d minusculo retorna o valor do dia,e maiusculo o nome
echo date('M')."<hr>"; // mesmo principior para o mês
echo date('Y')."<hr>"; // y minusculo exibe os dois ultimos digitos do ano e maiuculo ele por inteiro

echo date('m/d/y')."<hr>"; // -> exem: 07/03/23
echo date('M/D/Y')."<hr>"; // -> Jul/Mon/2023
echo date('l')."<hr>"; // exibide o dia por completo


//horario

echo date('d/m/Y H')."<hr>"; // h minusculo retorna a hora em ate 12 horas, americando, maiusculo em 24 horas

echo date('d/m/Y H:i:s A')."<hr>"; // horas:minutos:segundos; A = am ou pm   

// configurando para a região;

date_default_timezone_set('Asia/Tokyo'); // brasil -> America/Sao_Paulo

echo date('d/m/Y H:i:s A')."<hr>";

// para o banco de dados

$date = date('Y-m-d'); //coluna DATE
$datetime = date('Y-m-d H:i:s'); // DATETIME
// echo $datetime;


// TIME

// echo time()."<hr>"; // tempo em segundo desde 1970 até agora
$time = time();
// echo date('d/m/Y',$time);


// MKTIME
$data_pagamento = mktime(15, 30, 00, 01, 07, 2023); // -> hora, min, sec, dia, mes, ano
// echo date('d/m - h:i',$data_pagamento); // -> dia/mes - hora e minutos, 


// STRTOTIME

$data = '2023-02-10 13:30:00'; // data de pagamento no banco de dados

$data = strtotime($data); // de string para time
echo date('d/m/Y', $data); // convertento para o formato BR


?>