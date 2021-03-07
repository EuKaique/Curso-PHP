<?php
//For - Para | Foreach - Cada
for($contador = 0; $contador <= 10; $contador++){
    echo "8 x $contador = " .($contador * 8). "<br>";
}
echo "<hr>";

$cores = array("Azul", "Verde", "Vermelho", "Amarelo");

foreach($cores as $indice => $valor){
    echo $indice."-".$valor ."<br>";
}

?>