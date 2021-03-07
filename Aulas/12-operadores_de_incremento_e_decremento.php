<?php
/**
 *  Operadores de incremento e decremento
 * 
 *  Servem para somar ou subtrair com (+1 ou -1), qualquer valor do tipo:
 *  numérico ou string.
 */
$valor = 20;
 //Pré incremento
echo ++$valor;
echo "<hr>";
//Pós incremento
echo $valor++;
echo "<br>";
echo $valor;
echo "<hr>";
//Pré decremento
echo --$valor;
echo "<hr>";
//Pós decremento
echo $valor--;
echo "<br>";
echo $valor;
?>