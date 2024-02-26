<?php

    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $phone = addslashes($_POST['phone-number']);
    $message = addslashes($_POST['message']);

    $to = $email;
    $assunto = "Contato de: " . $email;

    $body = "Em alguns instantes iremos responder para você, e muito obrigado por ter entrado em contato conosco: " . $name . ".";

    $head = "From: contatolucasgab.wi@gmail.com" . "\n" . "Reply-to: " . $email . "\n" . "X=Mailer:PHP/" . phpversion();

    if (mail($to, $assunto, $body, $head)) {
        echo("E-mail enviado com sucesso!");
    } else {
        echo("Houve um erro ao enviar o e-mail!");
    }

?>