<?php

// $name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["title"];
$message = $_POST["content"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.example.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "nthuyen101202@gmail.com";
$mail->Password = "ugpzdmndlcdhwehg";

$mail->setFrom($email, $name);
$mail->addAddress("nthuyen101202@gmail.com", "Huyen");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();