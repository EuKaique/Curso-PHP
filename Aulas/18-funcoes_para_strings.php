<?php
/**
 * Funções para Strings
 *  strtoupper; -- CONVERTE EM LETRAS MAIÚSCULAS
 *  strtolower; -- CONVERTE EM LETRAS MINÚSCULAS
 *  substr; -- TRAZ APENAS ALGUNS CARACTERES PRÉ DEFINIDOS substr($string, inicio, comprimento);
 *  str_pad; -- RETORNA A $STRING MAIS UMA QUANTIDADE DE CARACTERES PRÉ DEFINIDA E EM QUE POSIÇÃO ESSES NOVOS CARACTERES VÃO FICAR
 *  str_repeat; -- REPETE UMA $STRING E O NÚMERO DE VEZES QUE A QUER REPETI
 *  strlen; -- RETORNA O COMPRIMENTO DE UMA STRING
 *  str_replace; --SUBSTITUI DETERMINADA PALAVRA DA $STRING
 *  strpos. --RETORNA A POSIÇÃO DE UMA PALAVRA DENTRO DA $TRING
 */

// Sintaxe strtoupper 
 $nome = "kaique oliveira santos";
 $novoNome = strtoupper($nome);
echo $novoNome;
echo "<hr>";
// Sintaxe strtolower
$nome = "KAIQUE OLIVEIRA SANTOS";
$novoNome = strtolower($nome);
echo $novoNome;
echo "<hr>";
// Sintaxe substr
$mensagem = "Olá mundo";
echo substr($mensagem, 4, 6);
echo "<hr>";
// Sintaxe str_pad
$objeto = "Livro";
$novoObjeto = str_pad($objeto, 11, '*', STR_PAD_BOTH);
echo $novoObjeto;
echo "<hr>";
// Sintaxe str_repeat
$string = str_repeat("Sucesso! ", 7);
echo $string;
echo "<hr>";
// Sintaxe strlen
$mensagem = "Olá mundo";
echo strlen($mensagem);
echo "<hr>";
// Sintaxe str_replace
$texto = "A seleção argentina será campeã em 2022";
$novoTexto = str_replace("argentina", "brasileira", $texto);
echo $novoTexto;
echo "<hr>";
// Sintaxe strpos
echo strpos($texto, "campeã" );
?>