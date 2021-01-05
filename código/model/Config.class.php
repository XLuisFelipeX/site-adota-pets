<?php

Class Config{
    //INFORMAÇÕES BASICAS DO SITE
    const SITE_URL = "http://localhost";
    const SITE_PASTA = "tccpets";
    const SITE_NOME = "ADOTA PETS";
    const SITE_EMAIL_ADM = "adotepetssite@gmail.com";
    const BD_LIMIT_POR_PAG = 3;

    //INFORMAÇÕES DO BANDO DE DADOS
    const BD_HOST = "localhost",
          BD_USER = "root",
          BD_SENHA = "",
          BD_BANCO = "tccpets",
          BD_PREFIX = "";    

    //INFORMAÇÕES PARA PHP MAILLER
    const EMAIL_HOST = "smtp.gmail.com";
    const EMAIL_USER = "adotepetssite@gmail.com";
    const EMAIL_NOME = "CONTATO | ADOTE PETS";
    const EMAIL_SENHA = "AdotePets@.1";
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = "tls";
    const EMAIL_COPIA = "isabellasantosdesouza@gmail.com";
   
}
?>