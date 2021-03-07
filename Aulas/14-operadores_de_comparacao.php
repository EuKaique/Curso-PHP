<?php
/**
 * Operadores de comparação
 *  
 * == igual
 * != não igual
 * === idêntico, ou seja mesmo valor e mesmo tipo primitivo
 * !== não idêntico
 * <> diferente
 * < menor
 * > maior
 * <= menor ou igual
 * >= maior ou igual
 * <=> Esse operador compara dois valores: se forem iguais retorna 0
 * se o lado esquerdo for menor retorna -1 se o lado direito for maior retorna 1
 */

 if(10 != 10):
    echo "Positivo";
 else:
    echo "Negativo";
 endif;
 echo "<hr>";
 var_dump(10 <=> 10);
?>