<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;

function sendMail($subject, $body, $email, $name, $html=false)
{   // configuracion inicial del servidor
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'b214e54d160cd1';
    $phpmailer->Password = 'bd68960b6681f0';



    //Recipients
    $phpmailer->setFrom('contact@miempresa.com', 'Mi empresa');
    $phpmailer->addAddress($email, $name);     //Add a recipient

    //se define el contenido del correo
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;
    //$phpmailer->AltBody = 'This is the body in plain text for non-HTML mail clients';

    //se manda el correo
    $phpmailer->send();
}
