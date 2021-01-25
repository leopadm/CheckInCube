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
$prenom = $_SESSION['prenom'];
$nom = $_SESSION['nom'];
$appellation = $_SESSION['appellation'];

$mail->AddAddress($_SESSION['mail'] , "$appellation $prenom $nom");
$mail->SetFrom("checkincube@gmail.com", "CheckInCube");
$mail->Subject = "[CheckInCube] Création de votre compte";
$content = "
            <head style='font-family:Montserrat, sans-serif;font-weight:800;'>
                Information concernant la création de votre compte
            </head>

            <body style='font-family:Montserrat, sans-serif;'>
                <a style='font-weight:500;'><br><br>Bonjour, $appellation $prenom $nom <br><br>Vous recevez ce mail pour vous confirmer la création de votre compte.<br>L'adresse mail correspondant à cette boite mail fait office d'identifiant.<br>Pour des raisons de sécurité le mot de passe n'est pas affiché sur ce mail.<br><br>Nous vous demandons aussi de nous retourner une copie du recto et du verso d'une pièce d'identité.</a>

                <a style='font-weight:500'><br><br>Cordialement</a>
            </body>
            ";

$mail->MsgHTML($content);
$mail->Send();

header('Location: index.php?page=menu_centreFr');
exit();

















?>