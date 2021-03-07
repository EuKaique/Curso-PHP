<?php
/*----------Escalares--------*/
// String
$nome = "Kaique";
var_dump($nome);
if(is_string($nome)):
    echo "É uma String";
else:
    echo "Não é String";
endif;
echo "<hr>";
// Int
$idade = 25;
var_dump($idade);
if(is_int($idade)):
    echo "É um inteiro";
else:
    echo "Não é um inteiro";
endif;
echo "<hr>";
// Float
$altura = 1.76;
var_dump($altura);
if(is_float($altura)):
    echo "É um Float";
else:
    echo "Não é Float";
endif;
echo "<hr>";
// Boolean
$admin = true;
var_dump($admin);
if(is_bool($admin)):
    echo "É um Boleano";
else:
    echo "Não é Boleano";
endif;
echo "<hr>";
/*----------Escalares--------*/
// Array
$carros = array("Gol","Uno","Camaro");
var_dump($carros);
if(is_array($carros)):
    echo "É um Array";
else:
    echo "Não é Array";
endif;
echo "<hr>";
// Objeto
class Cliente{
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }
}
$cliente = new Cliente();
$cliente->atribuirNome("Kaique");
var_dump($cliente);
if(is_object($cliente)):
    echo "É um Objeto";
else:
    echo "Não é um Objeto";
endif;
echo "<hr>";
/*----------Especiais--------*/
// Null
$cidade = NULL;
var_dump($cidade);
// Resource            
?>

