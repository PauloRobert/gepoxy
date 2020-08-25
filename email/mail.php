<?php

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";

$nome = $_POST['c'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
#$celular = $_POST['celular'];
#$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
$formcontent=" Enviado por: $nome \n Email do cliente: $email \n telefone: $telefone \n mensagem: \n $mensagem \n";
$recipient = "contato@gepoxy.com.br";
$subject = "Contato do site";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Desculpe-nos, parece que houve um erro ao enviar a sua mensagem");
echo "Obrigado, responderemos o mais rápido possivel";
  header( 'Location: http://melhorias.gepoxy.com.br/' ) ;
?>