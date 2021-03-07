<?php
/**
 * Operadores lógicos
 *
 * nos permite fazer comparações entre expressões: 
 * e (&& - and)
 * ou (|| - or)
 * ou exclusivo (xor)
 *  negação (!)
 */
$nome = "Rodolfo";
$idade = 26;

if(!($nome == "Rodrigo")and !($idade == 25)):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;

?>  