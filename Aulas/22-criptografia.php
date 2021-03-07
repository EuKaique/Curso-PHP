<?php
$senha = "123456";
//Criptografia pela base64
$novaSenha = base64_encode($senha);
echo "base64: ".$novaSenha."<br>";
echo "Sua senha é ".base64_decode($novaSenha);
echo "<hr>";
//Criptografia por md5
echo "md5: ".md5($senha);
echo "<hr>";
//Criptografia por sha1
echo "sha1: ".sha1($senha);
echo "<hr>";
///////////////////////////////////////////////////////////////////////////////
//Criptografia por hash bcrypt
$senha = "123456";
$senha_db = '$2y$10$YRsNfzbueD0AaLDpbfov7.Weq1pvjw8PAcbezc5weI64YRS59N8eS';
if(password_verify($senha, $senha_db)){
    echo "Senha válida";
}else{
    echo "Senha inválida";
}
?>