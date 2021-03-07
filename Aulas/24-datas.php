<?php
//DATA ATUAL
date_default_timezone_set('America/Sao_Paulo');
echo date('d/m/Y H:i:s');
echo "<hr>";
//ARMAZENAR DATA NO BANCO DE DADOS
$data = date('Y-m-d'); //SÓ A DATA
echo $data;
echo "<br>";
$datatime = date('Y-m-d H:i:s'); //DATA, HORA, MINUTOS E SEGUNDOS
echo $datatime;
echo "<hr>";
//TIME
$time = time();
echo date('d/m/Y', $time);
echo "<hr>";
//MKTIME
$data_pagamento = mktime(15, 30, 15, 02, 20, 2023);
echo date('d/m/y - h:i', $data_pagamento);
echo "<hr>";
//STRTOTIME
$data = '2019-04-10 13:30:00';
$data = strtotime($data);
echo date('d/m/Y', $data);
?>