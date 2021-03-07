<?php
/*
* Operadores aritméticos
*
* São usados com valores numéricos para executar operações aritméticas comuns, como adição, subtração, multiplicação etc.
*
* Adição +
* Subtração -
* Multiplicação *
* Divisão /
* Módulo %
* Exponenciação **     
*/ 

$a = 10;
$b = 20;
$c = 30;
$d = 5;
$e = 16;

$adição = $a + $b;
echo $adição;
echo "<hr>";

$subtração = $a - $d;
echo $subtração;
echo "<hr>";

$multiplicacao = $c * $d;
echo $multiplicacao;
echo "<hr>";

$divisao = $b / $d;
echo $divisao;
echo "<hr>";

$modulo = $e % $a;
echo $modulo;
echo "<hr>";

$exponenciacao = $e ** $d;
echo $exponenciacao;
echo "<hr>";

//Ordem de preferência --- a preferência é de quem está entre parentêses, assim como na matemática.
echo (5+6+9+7) / 4;

?>