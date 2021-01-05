<?php

$to      = Config::EMAIL_USER;
$subject = 'Contato - Adota Pets (SITE)';
$message = 'Email de'.$_POST['nomeanuciante']. "\r\n"  .'Com a seguinte mensagem:'.$_POST['mensagem']. "\r\n"  .'Telefone de contato:'.$_POST['telefoneanunciante'];
$dest = $_POST['email'];

$headers = "From: ". $dest;

mail($to, $subject, $message, $headers);
?>

<script>alert('Email enviado com sucesso!')</script>
<meta http-equiv="refresh" content="0; url=anuncie">