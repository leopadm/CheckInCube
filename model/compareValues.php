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

function connectBDD(){
    try {
        $bdd =new PDO('mysql:host=localhost;dbname=checkincube;charset=utf8','root','root');
    }
    catch (PDOException $e){
        echo "Erreur!:" .$e->getMessage() ."<br/>";
        die();
    }
    return($bdd);
}

function getTable($table){
    $bdd = connectBDD();
    $sql = "SELECT * FROM $table";
    return($bdd->query($sql));
}

function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

$codeperso = generateRandomString();

if(isset($_POST['inputUser']) && isset($_POST['inputPassword'])){
    $tpilote = getTable('pilote');
    while($pilote = $tpilote->fetch()) {
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
                                <div style='font-family:Montserrat,sans-serif; font-weight:800;'>Procédure de double authentification</div>
                            </head>

                            <body style='font-family:Montserrat, sans-serif;'>
                                <div style='font-weight:500;'></br></br>Bonjour, $appellation $prenom $nom</br></br>Vous recevez ce mail pour vous connecter à votre compte.</br>Ce mail contient un code généré aléatoirement et unique.</br>Veuillez rentrer le code affiché ci-dessous en respectant la typographie.</br></br></div>

                                <div style='font-weight:800; border: 2px solid black; margin-left:40%; margin-right:40%; width:20%; border-radius:5px; text-align: center;'> $codeperso </div>

                                <dic style='font-weight:500'></br></br>Cordialament</div>
                            </body>
                            ";

                $mail->MsgHTML($content);
                $mail->Send();

                $_SESSION['codeperso'] = $codeperso;

                header('Location: /index.php?=verifymail1');
                exit();
            }
        }
    }
}

else{
    $tpilote = getTable('pilote');
    while($pilote = $tpilote->fetch()) {
        if ($pilote['mail'] !== $_POST['inputUser']) {
            echo "<script type='text/javascript'> alert('Identifiant incorrect. <br/> Veuillez saisir un identifiant correct.')";
            header('Location: /index.php?=connexionFr');
            exit();
        }
    }
}




                

?>