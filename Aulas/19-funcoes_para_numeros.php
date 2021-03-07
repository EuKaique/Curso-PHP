<?php
/**
 *  number_format --FORMATA UM NÚMERO
 *  round -- ARREDONDA UM NÚMERO
 *  ceil -- ARREDONDA UM NÚMERO PRA CIMA
 *  floor -- ARREDONDA UM NÚMERO PRA BAIXO
 *  rand -- SORTEIA NÚMEROS PRÉ DEFINIDOS
 */
//Sintaxe do number_format
$preco = 1256.99;
$precoFormatado = number_format($preco, 2, ",", ".");
echo "O preço formatado é de R$ $precoFormatado";
echo "<hr>";
//Sintaxe round
echo round(3.3);
echo "<hr>";
//Sintaxe ceil
echo ceil(3.3);
echo "<hr>";
//Sintaxe floor
echo floor(2.8);
echo "<hr>";
//Sintaxe rand
echo rand(50,100);
?>

