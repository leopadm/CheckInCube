<?php

session_start();

echo '<script src="https://kit.fontawesome.com/e0550c5f3b.js" crossorigin="anonymous"></script>
      <link rel="icon" type="image/png" href="Ressources/Medias/LogoWebSite_1.png">';

//Disables debugging
ini_set('display_errors', '0');
ini_set('display_startup_errors', '0');

require_once('model/compareValues.php');

function home()
{
    require('view/viewHomeFr.php');
}

function homeAll()
{
    require('view/viewHomeAll.php');
}

function homeEsp()
{
    require('view/viewHomeEsp.php');
}

function error404()
{
    require('view/viewError404.php');
}

function choixCategorieFr()
{
    require('view/view_choix_categoriesFr.php');
}

function choixCategorieAng()
{
    require('view/view_choix_categorieAng.php');
}

function inscription_centreForm()
{
    require('view/view_inscription_centreForm.php');
}

function inscription_piloteFr()
{
    require('view/view_inscriptionPiloteFr.php');
}

function menu_centreFr()
{
    require('view/view_menu_centre.php');
}

function menu_centreAng()
{
    require('view/view_menu_centre_Ang.php');
}

function menu_centreAll()
{
    require('view/view_menu_centre_All.php');
}

function menu_piloteFr()
{
    require('view/view_menupilote.php');
}

function menu_piloteAng()
{
    require('view/view_menupiloteAng.php');
}

function menu_piloteAll()
{
    require('view/view_menupiloteAll.php');
}

function connexionAll()
{
    require('view/viewConnexionAll.php');
}

function connexionAng()
{
    require('view/viewConnexionAng.php');
}

function connexionEsp()
{
    require('view/viewConnexionEsp.php');
}

function connexionFr()
{
    require('view/viewPageConnexion.php');
}

function categorieConnexionFr()
{
    require('view/categorieConnexion.php');
}

function writeValuesFr()
{
    require('model/writeValuesFr.php');
}

function writeValuesAng()
{
    require('model/writeValuesAng.php');
}

function writeValuesCentreForm()
{
    require('model/writeValuesCentreForm.php');
}

function confirmAccountFr()
{
    require('model/confirmaccountFr.php');
}

function confirmAccountAng()
{
require('model/confirmaccountAng.php');
}

function confirmaccountCF()
{
    require('model/confirmaccountCF.php');
}

function compareValuesFr()
{
    if(isset($_POST['inputUser']) && isset($_POST['inputPassword'])){
        $req = getPilote();
        while ($pilote = $req->fetch(PDO::FETCH_ASSOC)) {
            if ($pilote['mail'] == $_POST['inputUser']){
                if ($pilote['mot_de_passe'] == hash("SHA256",$_POST['inputPassword'])) {
                    $codeperso = generateRandomString();
                    $_SESSION['prenom'] = $pilote['prenom'];
                    $_SESSION['nom'] = $pilote['nom'];
                    $_SESSION['appellation'] = $pilote['appellation'];
                    $_SESSION['genre'] = $pilote['genre'];
                    $_SESSION['mail'] = $pilote['mail'];

                    $reception = $pilote['mail'];
                    $prenom = $pilote['prenom'];
                    $nom = $pilote['nom'];
                    $appellation= $pilote['appellation'];

                    $content = "
                                <head>
                                    <div style='font-family:Montserrat,sans-serif; font-weight:800;'>Procédure de double authentification</div>
                                </head>

                                <body style='font-family:Montserrat, sans-serif;'>
                                    <div style='font-weight:500;'></br></br>Bonjour, $appellation $prenom $nom</br></br>Vous recevez ce mail pour vous connecter à votre compte.</br>Ce mail contient un code généré aléatoirement et unique.</br>Veuillez rentrer le code affiché ci-dessous en respectant la typographie.</br></br></div>

                                    <div style='font-weight:800; border: 2px solid black; margin-left:40%; margin-right:40%; width:20%; border-radius:5px; text-align: center;'> $codeperso </div>

                                    <dic style='font-weight:500'></br></br>Cordialement</div>
                                </body>
                                ";

                    $_SESSION['codeperso'] = $codeperso;

                    mailing('[CheckInCube] Double authentification', $content, $reception, "$appellation $nom $prenom");

                    header('Location: index.php?page=verifymail1');
                    exit();
                }
            }
        }
    }

    else{
        $req = compareValues();
        while($pilote = $req->fetch(PDO::FETCH_ASSOC)) {
            if ($pilote['mail'] !== $_POST['inputUser']) {
                echo "<script type='text/javascript'> alert('Identifiant incorrect. <br/> Veuillez saisir un identifiant correct.')";
                header('Location: index.php?page=connexionFr');
                exit();
            }
        }
    }
}

function compareValuesAng()
{
    if(isset($_POST['inputUser']) && isset($_POST['inputPassword'])){
        $req = getPilote();
        while ($pilote = $req->fetch(PDO::FETCH_ASSOC)) {
            if ($pilote['mail'] == $_POST['inputUser']){
                if ($pilote['mot_de_passe'] == hash("SHA256",$_POST['inputPassword'])) {
                    $codeperso = generateRandomString();
                    $_SESSION['prenom'] = $pilote['prenom'];
                    $_SESSION['nom'] = $pilote['nom'];
                    $_SESSION['appellation'] = $pilote['appellation'];
                    $_SESSION['genre'] = $pilote['genre'];
                    $_SESSION['mail'] = $pilote['mail'];

                    $reception = $pilote['mail'];
                    $prenom = $pilote['prenom'];
                    $nom = $pilote['nom'];
                    $appellation= $pilote['appellation'];

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

                    $_SESSION['codeperso'] = $codeperso;

                    mailing('[CheckInCube] Double authentification', $content, $reception, "$appellation $nom $prenom");

                    header('Location: index.php?page=verifymail1Ang');
                    exit();
                }
            }
        }
    }

    else{
        $req = compareValues();
        while($pilote = $req->fetch(PDO::FETCH_ASSOC)) {
            if ($pilote['mail'] !== $_POST['inputUser']) {
                echo "<script type='text/javascript'> alert('Incorrect ID. <br/> Please select a correct ID.')";
                header('Location: index.php?page=connexionAng');
                exit();
            }
        }
    }
}

function compareValuesEsp()
{
    require('model/compareValuesEsp.php');
}

function compareValuesAll()
{
    require('model/compareValuesAll.php');
}

function verifymail1()
{
    require('model/verifymail1.php');
}

function verifymail2()
{
    require('model/verifymail2.php');
}

function verifymail1Ang()
{
    require('model/verifymail1Ang.php');
}

function verifymail2Ang()
{
    require('model/verifymail2Ang.php');
}

function verifymail1All()
{
    require('model/verifymail1All.php');
}

function verifymail2All()
{
    require('model/verifymail2All.php');
}

function verifymail1Esp()
{
    require('model/verifymail1Esp.php');
}

function verifymail2Esp()
{
    require('model/verifymail2Esp.php');
}

function compte()
{
    require('view/viewCompte.php');
}

function compteAll()
{
    require('view/viewCompte.php');
}

function compteAng()
{
    require('view/viewCompteAll.php');
}

function centre()
{
    require('view/viewcentre.php');
}

function centreAll()
{
    require('view/viewcentreAll.php');
}

function centreAng()
{
    require('view/viewcentreAng.php');
}

function rdv()
{
    require('model/RDV.php');
}

function rdvForm()
{
    require('view/view_RDV_form.php');
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
function mailing($subject, $content, $to_address, $to_name)
{
    require 'PHPMailer-master/PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/PHPMailer-master/src/SMTP.php';

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";

    $mail->SMTPDebug  = 1;
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "mail46.lwspanel.com";
    $mail->Username   = 'checkincube@gmail.com';
    $mail->Password   = 'psychotech.inc';

    $mail->IsHTML(true);
    $mail->AddAddress($to_address,"$to_name");
    $mail->SetFrom('checkincube@gmail.com', 'CheckInCube');
    $mail->Subject = $subject;
    $mail->SMTPDebug = 0;
    $mail->MsgHTML($content); 
    $mail->Send();
}

function generateRandomString($length = 10) 
{
    return substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}



?>