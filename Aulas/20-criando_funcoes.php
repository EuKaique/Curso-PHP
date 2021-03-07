<?php
//Criando funções
function exibirNome($nome){
    echo "Meu nome é $nome";
}
exibirNome("Kaique");
echo "<hr>";

function calculaMedia($nome, $n1, $n2){
    $media = ($n1 + $n2) / 2;
    if($media >= 7){
        echo "$nome foi aprovado e sua nota foi $media";
    }else{
        echo "$nome foi reprovado e sua nota foi $media";
    }
}

calculaMedia("Kaique", 9, 8);

?>