<?php
//While - Enquanto | do While - Faça enquanto
$contador = 1;
while($contador <= 10):
    echo "Contador: " . $contador++ . "<br>";
endwhile;

echo "<hr>";

$contador = 1;
do{
    echo "Contador: ". $contador++ . "<br>";
}while($contador <= 10);

?>