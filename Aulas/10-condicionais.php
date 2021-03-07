<?php
/*
if
else
elseif
switch
*/
// If, ElseIF e Else 
$numero = 10;

if($numero == 10):
    echo "É igual a 10";
elseif($numero <= 9):
    echo "Número menor ou igual a 9";    
else:
    echo "É diferente de 10";    
endif;
echo "<hr>";
// Operador Ternário
$media = 9;
echo ($media >= 7)?"Aprovado!":"Reprovado";
echo "<hr>";
// switch
$cor = "";
switch($cor):
    case "Vermelho":
        echo "Você escolheu a cor vermelha";
    break;
    case "Verde":
        echo "Você escolheu a cor verde";
    break;
    case "Azul":
        echo "Você escolheu a cor azul";
    break;
    case "Amarela":
        echo "Você escolheu a cor amarela";
    break;
    case "Vermelho":
        echo "Você escolheu a cor laranja";
    break;
    default:
        echo "Você não escolheu nenhuma cor";
endswitch;        
?>