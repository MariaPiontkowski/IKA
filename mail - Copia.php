<?php

if($_POST){
    $to      = 'maria.piontkowski@hotmail.com';
    $subject = 'Contato Realizado pelo Site';
    $headers = 'From: no-reply@ikaelevadores.com.br' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $message = "Olá! Você recebeu um contato realizado pelo site:
    
Nome: ". $_POST["nome"] . "
E-mail: ". $_POST["email"];

if($_POST["assunto"]){

    $message .= "
Assunto: ". $_POST["assunto"];
}

$message .= "

Mensagem: ". $_POST["mensagem"];

    $mail = mail($to, $subject, utf8_decode($message), $headers);
}

header("Location:contact.html");
