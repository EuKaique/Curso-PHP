<?php
//MANIPULÇÃO DE ARQUIVOS
/**
 *  fopen()
 *  fclose()
 *  fwrite()
 *  !feof()
 *  fgets()
 *  filesize
 */

 $arquivo = 'arquivo.txt';
 $conteudo = "Conteudo de teste\r\n";
 $tamanhoArquivo = filesize($arquivo);

 $arquivoAberto = fopen($arquivo, 'r');
 //fwrite($arquivoAberto, $conteudo);
 while(!feof($arquivoAberto)){
     $linha = fgets($arquivoAberto, $tamanhoArquivo);
     echo $linha."<br>";
 }
 fclose($arquivoAberto);
?>