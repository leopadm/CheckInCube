<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer();
$mail->CharSet = "UTF-8";
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->Encoding = 'base64';
$mail->SMTPDebug  = 1;
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "checkincube@gmail.com";
$mail->Password   = "psychotech.inc";
$mail->IsHTML(true);
$mail->AddAddress($_SESSION['mail'] , "$_SESSION['prenom'] $_SESSION['nom'] ");
$mail->SetFrom("checkincube@gmail.com", "CheckInCube");
$mail->Subject = "[CheckInCube] Creation of your account";
$content = "
            <head style='font-family:Montserrat, sans-serif;font-weight:800;'>
                Information regarding the creation of your account
            </head>

            <body style='font-family:Montserrat, sans-serif;'>
                <a style='font-weight:500;'></br></br>Dear $_SESSION['appellation'] $_SESSION['prenom'] $_SESSION['prenom']</br></br>Your are receiving this email as you created an account.</br>The email adress to which you received this email will be used as your user ID to log in to your account.</br>For safety protocols, your password will not be communicated in this email.</br></br>To complete the ccreation of your account, we are asking you to send to us a double-sided copy of your ID, or passport. </a>

                <a style='font-weight:500'></br></br>Sincerely</a>
            </body>
            ";

$mail->MsgHTML($content);
$mail->Send();

header('Location: view_menupiloteAng.php');
exit();

















?>