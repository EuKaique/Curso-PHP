<?php
/**
 * is_array($array) = verificar se uma determinada variável é um array
 * in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array
 * array_keys($array) = retorna um novo array com as chaves do array passado como parâmetro
 * array_values($array) = retorna um novo array com os valores do array passado como parâmetro
 * array_merge($array1, $array2) = agrega o conteúdo dos dois arrays
 * array_pop($array) = exclui a última posição do array
 * array_shift($array) = exclui a primeira posição do array
 * array_unshift($arr, "valor") = adiciona um ou mais elemento no inicio do array
 * array_push($array, "valor", "valor") = adiciona um ou mais elementos no final de um array
 * array_combine($keys, $values) = mescla os dois arrays passados
 * array_sum() = calcula a soma dos elementos de um array
 * explode("/", "20/01/2001") = transforma string em array
 * implode("-", $arr) = transforma array em string
 */
$nomes = array("Rodrigo","Ana","Francisco","Maria");
$string = implode(", ", $nomes);
echo $string;
/*
$frase = "Meu nome não é Johny";
$novaFrase = explode(" ",$frase);
print_r($novaFrase);
/*
$data = "23/02/2021";
$novaData = explode("/",$data);
print_r($novaData);
/*
$soma = array(1,2,5,8,9);
echo array_sum($soma);
/*
$keys = array("São Paulo","Palmeiras","Corinthians");
$values = array("Campeão","Vice","Terceiro");

$times = array_combine($keys,$values);

print_r($times);
/*
$frutas = array("Uva","Laranja","Maçã");
print_r($frutas);
echo "<br>";
array_push($frutas,"Manga","Banana","Morango");
print_r($frutas);
/*
$carros = array("Gol","Uno","Onix");
print_r($carros);
echo "<br>";
echo array_shift($carros);
echo "<br>";
print_r($carros);
/*
$motos = array("Yamaha","Honda","Dafra");

$veiculos = array_merge($carros,$motos);

print_r($veiculos);
*/
/*
$nomes = array("Tia"=>"Ana","Namorada"=>"Bruna","Prima"=>"Natalia","Amiga"=>"Julia");

$values = array_values($nomes);
print_r($values);
/*
if(is_array($nomes)):
    echo "É um array";
else:
    echo "Não é array";
endif;
*/
/*
if(in_array("Bruna" , $nomes)):
    echo "Existe no array";
else:
    echo "Não é existe";
endif;
*/
/*
$keys = array_keys($nomes);
print_r($keys);
?>
*/