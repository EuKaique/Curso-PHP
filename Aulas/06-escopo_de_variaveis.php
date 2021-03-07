<?php
//ESCOPO GLOBAL
$nome = "Kaique";
$a = 1;
$b = 3;
$c = 7;

function exibeNome(){
    global $nome;
    //ESCOPO LOCAL
    echo $nome;
}
exibeNome();
echo "<hr>";
/////////////////////////
function exibeCidade(){
    global $cidade;
    $cidade = "São Paulo";
}
exibeCidade();
echo $cidade;
echo "<hr>";
////////////////////////
function exibeSoma(){
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}
exibeSoma();
?>