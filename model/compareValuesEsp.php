<?php

session_destroy();
session_start();

$user = 'root';
$password = 'root';
$db = 'checkincube';
$host = 'localhost';
$port = 3306;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/PHPMailer-master/src/SMTP.php';

function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

$codeperso = generateRandomString();

if(isset($_POST['inputUser']) && isset($_POST['inputPassword'])){
    $bdd =new PDO('mysql:host=localhost;dbname=checkincube;charset=utf8','root','root');
    $str = "SELECT * FROM pilote;";
    $sql = $bdd->prepare($str);
    $sql->execute();
    while ($pilote = $sql->fetch(PDO::FETCH_ASSOC)) {
        if ($pilote['mail'] == $_POST['inputUser']){
            if ($pilote['mot_de_passe'] == hash("SHA256",$_POST['inputPassword'])) {
                $_SESSION['prenom'] = $pilote['prenom'];
                $_SESSION['nom'] = $pilote['nom'];
                $_SESSION['appellation'] = $pilote['appellation'];
                $_SESSION['genre'] = $pilote['genre'];

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
                $mail->Subject = "[CheckInCube] Code de vérification";
                $content = "
                            <head>
                                <div style='font-family:Montserrat,sans-serif; font-weight:800;'>Procedimiento de doble autentificación</div>
                            </head>

                            <body style='font-family:Montserrat, sans-serif;'>
                                <div style='font-weight:500;'></br></br>Hola, $appellation $prenom $nom</br></br>Recibe este email para conectarse a su cuenta.</br>Este correo electrónico contiene un código generado aleatoriamente y único.</br>Por favor, introduzca el código de abajo de acuerdo con la tipografía.</br></br></div>

                                <div style='font-weight:800; border: 2px solid #777777; margin-left:40%; margin-right:40%; width:20%; border-radius:5px; text-align: center;'> $codeperso </div>

                                <dic style='font-weight:500'></br></br>Cordialmente</div>
                            </body>
                            ";

                $mail->MsgHTML($content);
                $mail->Send();

                $_SESSION['codeperso'] = $codeperso;

                header('Location: index.php?page=verifymail1');
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
            echo "<script type='text/javascript'> alert('Identifiant incorrect. <br/> Veuillez saisir un identifiant correct.')";
            header('Location: index.php?page=connexionFr');
            exit();
        }
    }
}




                

?>