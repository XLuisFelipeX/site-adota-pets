<?php

$to      = Config::EMAIL_USER;
$subject = 'Contato - Adota Pets (SITE)';
$message = 'Nome:'.$_GET['nome']. "\r\n" .'Mensagem de contato:'.$_GET['mensagem']. "\r\n" .'Telefone de contato:'.$_GET['telefone'];
$dest = $_GET['email'];

$headers = "From: ". $dest;

mail($to, $subject, $message, $headers);
?>

<script>alert('Email enviado com sucesso!')</script>
<meta http-equiv="refresh" content="0; url=contato">