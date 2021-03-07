<?php
//ARRAYS NUMÉRICOS
$carros = array(1=>"BMW",2=>"Veloster",3=>"Hilux");
$carros[] = "Amarok";
$carros[10] = "Camaro";
//print_r($carros);
echo $carros[10];
echo "<br>";
$motos = array();
$motos[] = "Honda";
$motos[] = "Yamaha";
$motos[5] = "Suzuki";
echo $motos[0];
echo "<br>";
$clientes = ["Felipe","Rodrigo","Bia"];
print_r($clientes);
echo "<hr>";
//Count
//echo count($motos);
$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";
//Foreach
foreach($carros as $valor){
    echo $valor.'<br>';
}
echo "<hr>";
//ARRAYS ASSOCIATIVOS
$pessoas = array("nome" => "Rodrigo", "idade" => 24, "altura" => 1.89);
$pessoas["cidade"]="Itabuna";
echo $pessoas["cidade"];
echo "<hr>";
foreach($pessoas as $indice => $valor){
    echo $indice." : ".$valor."<br>";
}
echo "<hr>";
//ARRAYS MULTIDIMENSIONAIS
$times = array("Cariocas"=>array("Flamengo","Vasco","Botafogo","Fluminense"),"Paulistas"=>array("São Paulo","Corinthians","Palmeiras","Santos"));
foreach($times["Paulistas"] as $indice => $valor){
    echo $indice." : ".$valor."<br>";
}
?>