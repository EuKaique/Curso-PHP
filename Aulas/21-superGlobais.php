<?php
/**
 *  $GLOBALS -- PEGA QUALQUER VARIÁVEL DENTRO DE UM ARQUIVO PHP
 *  $_SERVER -- TRAZ UM ÍNDICE ESPECÍFICO DO PHP
 *  $_REQUEST
 *  $_POST -- ENVIA DADOS PARA UM SCRIPT PHP OU PARA UM BANCO DE DADOS
 *  $_GET -- ENVIA DADOS PARA UM SCRIPT PHP POR UMA URL OU RETORNA DADOS DE UM BANCO DE DADOS
 *  $_FILES 
 *  $_ENV
 *  $_COOKIE
 *  $_SESSION
 */

 //Sintaxe $GLOBALS
$x = 10;
$y = 15;

function soma(){
   echo $GLOBALS['x'] + $GLOBALS['y'];
   echo "<hr>";
}
soma();
//Sintaxe $_SERVER, alguns indíces, para ver mais indices consulte o manual PHP
echo $_SERVER['PHP_SELF']."<br>"; //Indíce PHP_SELF
echo $_SERVER['SERVER_NAME']."<br>"; //Indíce SERVER_NAME
echo $_SERVER['SCRIPT_FILENAME']."<br>"; 
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";
?>