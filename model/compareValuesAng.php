<?php

session_destroy();
session_start();

$user = 'root';
$password = 'root';
$db = 'checkincube';
$host = 'localhost';
$port = 3306;

$text1 = "text1";
$text2 = "text2";
$text3 = "text3";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/PHPMailer-master/src/SMTP.php';

$codeperso = generateRandomString();

if(isset($_POST['inputUser']) && isset($_POST['inputPassword'])){
    $bdd =new PDO('mysql:host=localhost;dbname=checkincube;charset=utf8','root','root');
    $str = "SELECT * FROM pilote;";
    $sql = $bdd->prepare($str);
    $sql->execute();
    while($pilote = $sql->fetch(PDO::FETCH_ASSOC)) {
        if ($pilote['mail'] == $_POST['inputUser']){
            if ($pilote['mot_de_passe'] == hash("SHA256",$_POST['inputPassword'])) {
                $_SESSION['prenom'] = $pilote['prenom'];
                $_SESSION['nom'] = $pilote['nom'];

                $reception = $pilote['mail'];
                $prenom = $pilote['prenom'];
                $nom = $pilote['nom'];
                $appellation= $pilote['appellation'];

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
                $mail->AddAddress($reception, "$prenom $nom");
                $mail->SetFrom("checkincube@gmail.com", "CheckInCube");
                $mail->Subject = "[CheckInCube] Verification Code";
                $content = "
                            <head style='font-family:Montserrat, sans-serif;font-weight:800;'>
                                Two steps verification procedure
                            </head>

                            <body style='font-family:Montserrat, sans-serif;'>
                                <a style='font-weight:500;'></br></br>Dear, $appellation $prenom $nom</br></br>You are receiving this email as you are requesting to log in to your account.</br>This email contains a unique and randomly-generated code.</br>Please, enter this code in the associated page while respectinh the typography.</br></br></a>

                                <a style='font-weight:800; border: 2px solid black;'> $codeperso </a>

                                <a style='font-weight:500'></br></br>Sincerely</a>
                            </body>
                            ";

                $mail->MsgHTML($content);
                $mail->Send();

                $_SESSION['codeperso'] = $codeperso;

                header('Location: index.php?page=verifymail1Ang');
                exit();
            }
        }
    }
}

else{
    $bdd =new PDO('mysql:host=localhost;dbname=checkincube;charset=utf8','root','root');
    $str = "SELECT * FROM pilote;";
    $sql = $bdd->prepare($str);
    $sql->execute();
    while($pilote = $sql->fetch(PDO::FETCH_ASSOC)) {
        if ($pilote['mail'] !== $_POST['inputUser']) {
            echo "<script type='text/javascript'> alert('Incorrect user ID. <br/> Please, enter a correct user ID.')";
            header('Location: index.php?page=viewConnexionAng');
            exit();
        }
    }
}




                

?>