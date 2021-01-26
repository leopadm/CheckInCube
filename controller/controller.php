<?php

session_start();

echo '<script src="https://kit.fontawesome.com/e0550c5f3b.js" crossorigin="anonymous"></script>
      <link rel="icon" type="image/png" href="Ressources/Medias/LogoWebSite_1.png">';

//Disables debugging
ini_set('display_errors', '0');
ini_set('display_startup_errors', '0');

require_once('model/compareValues.php');
require_once('model/writeValues.php');
require_once('model/RDV.php');
require_once('model/search.php');
require_once('model/writeValuesCF.php');
require_once('model/writeValuesCR.php');

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

function inscription_CF()
{
    require('view/view_inscription_CF.php');
}

function inscription_CR()
{
    require('view/view_inscription_CR.php');
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
    if (!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['mail']) && !empty($_POST['mdp']) && !empty($_POST['mdp2'])){
        if ($_POST['sexe'] == 'homme') {     
            if ($_POST['mdp'] == $_POST['mdp2']){
                $prenom = $_POST['prenom'];
                $nom = $_POST['nom'];
                $mdp = hash("SHA256", $_POST['mdp']);
                $mail = $_POST['mail'];
                $genre = 'homme';
                $appellation = 'M.';
                $date = $_POST['dateNaissance'];

                write($nom, $prenom, $mail, $mdp, $genre, $appellation, $date);

                $_SESSION['prenom'] = $prenom;
                $_SESSION['nom'] = $nom;
                $_SESSION['mail'] = $mail;
                $_SESSION['appellation'] = $appellation;

                header('Location: /index.php?page=confirmaccountFr');
                exit();
            }
        }elseif ($_POST['civilite'] == 'Mlle') {
            if ($_POST['mdp'] == $_POST['mdp2']){
                $prenom = $_POST['prenom'];
                $nom = $_POST['nom'];
                $mdp = hash("SHA256", $_POST['mdp']);
                $mail = $_POST['mail'];
                $genre = 'femme';
                $appellation = 'Mlle';
                $date = $_POST['dateNaissance'];

                $bdd = connectBDD();
                write($nom, $prenom, $mail, $mdp, $genre, $appellation, $date);

                $_SESSION['prenom'] = $prenom;
                $_SESSION['nom'] = $nom;
                $_SESSION['mail'] = $mail;
                $_SESSION['appellation'] = $appellation;

                header('Location: /index.php?page=confirmaccountFr');
                exit();
            }     
        }elseif ($_POST['civilite'] == 'Mme') {
            if ($_POST['mdp'] == $_POST['mdp2']){
                $prenom = $_POST['prenom'];
                $nom = $_POST['nom'];
                $mdp = hash("SHA256", $_POST['mdp']);
                $mail = $_POST['mail'];
                $genre = 'femme';
                $appellation = 'Mme';
                $date = $_POST['dateNaissance'];

                $bdd = connectBDD();
                write($nom, $prenom, $mail, $mdp, $genre, $appellation, $date);

                $_SESSION['prenom'] = $prenom;
                $_SESSION['nom'] = $nom;
                $_SESSION['mail'] = $mail;
                $_SESSION['appellation'] = $appellation;

                header('Location: /index.php?page=confirmaccountFr');
                exit();
            }         
        }
    }

    else{

        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        $mdp2 = password_hash($_POST['mdp2'], PASSWORD_DEFAULT);
        $mail = $_POST['mail'];

        if (empty($prenom)){
            echo "<script type='text/javascript'> alert('Pas de prénom saisi. <br/> Veuillez saisir un prénom.')";
            header('Location: index.php?page=inscription_piloteFr');
            exit();
        }

        elseif (empty($nom)){
            echo "<script type='text/javascript'> alert('Pas de nom saisi. <br/> Veuillez saisir un nom.')";
            header('Location: index.php?page=inscription_piloteFr');
            exit();
        }

        elseif (empty($mail)){
            echo "<script type='text/javascript'> alert('Pas de mail saisi. <br/> Veuillez saisir un mail.')";
            header('Location: index.php?page=inscription_piloteFr');
            exit();
        }

        elseif (empty($mdp)){
            echo "<script type='text/javascript'> alert('Pas de mot de passe saisi. <br/> Veuillez saisir un mot de passe.')";
            header('Location: index.php?page=inscription_piloteFr');
            exit();
        }

        elseif($mdp !== $mdp2){
            echo "<script type='text/javascript'> alert('Les mots de passe saisis ne sont pas identiques. <br/> Veuillez saisir des mots de passe identiques.')";
            header('Location: index.php?page=inscription_piloteFr');
            exit();
        }

    }
}

function writeValuesAng()
{
    if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['mdp']) && isset($_POST['mail'])){
        if (($_POST['sexe'] == 'homme')) {     
            if ($_POST['mdp'] == $_POST['mdp2']){
                $prenom = $_POST['prenom'];
                $nom = $_POST['nom'];
                $mdp = hash("SHA256", $_POST['mdp']);
                $mail = $_POST['mail'];
                $genre = 'homme';
                $appellation = 'M.';
                write($nom, $prenom, $mail, $mdp, $genre, $appellation);
    
                $_SESSION['prenom'] = $prenom;
                $_SESSION['nom'] = $nom;
                $_SESSION['mail'] = $mail;
                $_SESSION['appellation'] = $appellation;
    
                header('Location: /index.php?=confirmaccountAng');
                exit();
            }
        } 
        elseif ($_POST['civilite'] == 'Mlle') {
            if ($_POST['mdp'] == $_POST['mdp2']){
                $prenom = $_POST['prenom'];
                $nom = $_POST['nom'];
                $mdp = hash("SHA256", $_POST['mdp']);
                $mail = $_POST['mail'];
                $genre = 'femme';
                $appellation = 'Mlle';
                write($nom, $prenom, $mail, $mdp, $genre, $appellation);
    
                $_SESSION['prenom'] = $prenom;
                $_SESSION['nom'] = $nom;
                $_SESSION['mail'] = $mail;
                $_SESSION['appellation'] = $appellation;
    
                header('Location: /index.php?=confirmaccountAng');
                exit();
            }       
        }
    
        elseif ($_POST['civilite'] == 'Mme') {
            if ($_POST['mdp'] == $_POST['mdp2']){
                $prenom = $_POST['prenom'];
                $nom = $_POST['nom'];
                $mdp = hash("SHA256", $_POST['mdp']);
                $mail = $_POST['mail'];
                $genre = 'femme';
                $appellation = 'Mme';
                write($nom, $prenom, $mail, $mdp, $genre, $appellation);
    
                $_SESSION['prenom'] = $prenom;
                $_SESSION['nom'] = $nom;
                $_SESSION['mail'] = $mail;
                $_SESSION['appellation'] = $appellation;
    
                header('Location: /index.php?=confirmaccountAng');
                exit();
            }           
        }     
    }
    
    else{
    
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        $mdp2 = password_hash($_POST['mdp2'], PASSWORD_DEFAULT);
        $mail = $_POST['mail'];
    
        if (empty($prenom)){
            echo "<script type='text/javascript'> alert('Pas de prénom saisi. <br/> Veuillez saisir un prénom.')";
            header('Location: index.php?page=inscription_piloteFr');
        }
    
        elseif (empty($nom)){
            echo "<script type='text/javascript'> alert('Pas de nom saisi. <br/> Veuillez saisir un nom.')";
            header('Location: index.php?page=inscription_piloteFr');
        }
    
        elseif (empty($mail)){
            echo "<script type='text/javascript'> alert('Pas de mail saisi. <br/> Veuillez saisir un mail.')";
            header('Location: index.php?page=inscription_piloteFr');
        }
    
        elseif (empty($mdp)){
            echo "<script type='text/javascript'> alert('Pas de mot de passe saisi. <br/> Veuillez saisir un mot de passe.')";
            header('Location: index.php?page=inscription_piloteFr');
        }
    
        elseif($mdp !== $mdp2){
            echo "<script type='text/javascript'> alert('Les mots de passe saisis ne sont pas identiques. <br/> Veuillez saisir des mots de passe identiques.')";
            header('Location: index.php?page=inscription_piloteFr');
        }
    
    }
}

function writeValuesCF()
{
    if (!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['mail']) && !empty($_POST['mdp']) && !empty($_POST['mdp2'])){
        if ($_POST['sexe'] == 'homme') {     
            if ($_POST['mdp'] == $_POST['mdp2']){
                $prenom = $_POST['prenom'];
                $nom = $_POST['nom'];
                $mdp = hash("SHA256", $_POST['mdp']);
                $mail = $_POST['mail'];
                $genre = 'homme';
                $appellation = 'M.';
                $date = $_POST['dateNaissance'];
                $nomEntreprise = $_POST['nomEntreprise'];
                $poste = $_POST['poste'];
    
                writeCF($nom, $prenom, $mail, $mdp, $genre, $appellation, $date, $nomEntreprise, $poste);
    
                $_SESSION['prenom'] = $prenom;
                $_SESSION['nom'] = $nom;
                $_SESSION['mail'] = $mail;
                $_SESSION['appellation'] = $appellation;
    
                header('Location: /index.php?page=confirmaccountCF');
                exit();
            }
        }elseif ($_POST['civilite'] == 'Mlle') {
            if ($_POST['mdp'] == $_POST['mdp2']){
                $prenom = $_POST['prenom'];
                $nom = $_POST['nom'];
                $mdp = hash("SHA256", $_POST['mdp']);
                $mail = $_POST['mail'];
                $genre = 'femme';
                $appellation = 'Mlle';
                $date = $_POST['dateNaissance'];
    
                $bdd = connectBDD();
                writeCF($nom, $prenom, $mail, $mdp, $genre, $appellation, $date, $nomEntreprise, $poste);
    
                $_SESSION['prenom'] = $prenom;
                $_SESSION['nom'] = $nom;
                $_SESSION['mail'] = $mail;
                $_SESSION['appellation'] = $appellation;
    
                header('Location: /index.php?page=confirmaccountCF');
                exit();
            }     
        }elseif ($_POST['civilite'] == 'Mme') {
            if ($_POST['mdp'] == $_POST['mdp2']){
                $prenom = $_POST['prenom'];
                $nom = $_POST['nom'];
                $mdp = hash("SHA256", $_POST['mdp']);
                $mail = $_POST['mail'];
                $genre = 'femme';
                $appellation = 'Mme';
                $date = $_POST['dateNaissance'];
    
                $bdd = connectBDD();
                writeCF($nom, $prenom, $mail, $mdp, $genre, $appellation, $date, $nomEntreprise, $poste);
    
                $_SESSION['prenom'] = $prenom;
                $_SESSION['nom'] = $nom;
                $_SESSION['mail'] = $mail;
                $_SESSION['appellation'] = $appellation;
    
                header('Location: /index.php?page=confirmaccountCF');
                exit();
            }         
        }
    }
    
    else{
    
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        $mdp2 = password_hash($_POST['mdp2'], PASSWORD_DEFAULT);
        $mail = $_POST['mail'];
    
        if (empty($prenom)){
            echo "<script type='text/javascript'> alert('Pas de prénom saisi. <br/> Veuillez saisir un prénom.')";
            header('Location: index.php?page=inscription_CF');
            exit();
        }
    
        elseif (empty($nom)){
            echo "<script type='text/javascript'> alert('Pas de nom saisi. <br/> Veuillez saisir un nom.')";
            header('Location: index.php?page=inscription_CF');
            exit();
        }
    
        elseif (empty($mail)){
            echo "<script type='text/javascript'> alert('Pas de mail saisi. <br/> Veuillez saisir un mail.')";
            header('Location: index.php?page=inscription_CF');
            exit();
        }
    
        elseif (empty($mdp)){
            echo "<script type='text/javascript'> alert('Pas de mot de passe saisi. <br/> Veuillez saisir un mot de passe.')";
            header('Location: index.php?page=inscription_CF');
            exit();
        }
    
        elseif (empty($nomEntreprise)){
            echo "<script type='text/javascript'> alert('Pas de nom d'entreprise saisi. <br/> Veuillez saisir un nom d'entreprise.')";
            header('Location: index.php?page=inscription_CF');
            exit();
        }
    
    
        elseif($mdp !== $mdp2){
            echo "<script type='text/javascript'> alert('Les mots de passe saisis ne sont pas identiques. <br/> Veuillez saisir des mots de passe identiques.')";
            header('Location: index.php?page=inscription_CF');
            exit();
        }
    
    }
    
}

function writeValuesCR()
{
    if (!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['mail']) && !empty($_POST['mdp']) && !empty($_POST['mdp2'])){
        if ($_POST['sexe'] == 'homme') {     
            if ($_POST['mdp'] == $_POST['mdp2']){
                $prenom = $_POST['prenom'];
                $nom = $_POST['nom'];
                $mdp = hash("SHA256", $_POST['mdp']);
                $mail = $_POST['mail'];
                $genre = 'homme';
                $appellation = 'M.';
                $date = $_POST['dateNaissance'];
                $nomEntreprise = $_POST['nomEntreprise'];
                $poste = $_POST['poste'];
    
                writeCR($nom, $prenom, $mail, $mdp, $genre, $appellation, $date, $nomEntreprise, $poste);
    
                $_SESSION['prenom'] = $prenom;
                $_SESSION['nom'] = $nom;
                $_SESSION['mail'] = $mail;
                $_SESSION['appellation'] = $appellation;
    
                header('Location: index.php?page=confirmaccountCR');
                exit();
            }
        }elseif ($_POST['civilite'] == 'Mlle') {
            if ($_POST['mdp'] == $_POST['mdp2']){
                $prenom = $_POST['prenom'];
                $nom = $_POST['nom'];
                $mdp = hash("SHA256", $_POST['mdp']);
                $mail = $_POST['mail'];
                $genre = 'femme';
                $appellation = 'Mlle';
                $date = $_POST['dateNaissance'];
    
                $bdd = connectBDD();
                writeCR($nom, $prenom, $mail, $mdp, $genre, $appellation, $date, $nomEntreprise, $poste);
    
                $_SESSION['prenom'] = $prenom;
                $_SESSION['nom'] = $nom;
                $_SESSION['mail'] = $mail;
                $_SESSION['appellation'] = $appellation;
    
                header('Location: /index.php?page=confirmaccountCR');
                exit();
            }     
        }elseif ($_POST['civilite'] == 'Mme') {
            if ($_POST['mdp'] == $_POST['mdp2']){
                $prenom = $_POST['prenom'];
                $nom = $_POST['nom'];
                $mdp = hash("SHA256", $_POST['mdp']);
                $mail = $_POST['mail'];
                $genre = 'femme';
                $appellation = 'Mme';
                $date = $_POST['dateNaissance'];
    
                $bdd = connectBDD();
                writeCR($nom, $prenom, $mail, $mdp, $genre, $appellation, $date, $nomEntreprise, $poste);
    
                $_SESSION['prenom'] = $prenom;
                $_SESSION['nom'] = $nom;
                $_SESSION['mail'] = $mail;
                $_SESSION['appellation'] = $appellation;
    
                header('Location: index.php?page=confirmaccountCR');
                exit();
            }         
        }
    }
    
    else{
    
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        $mdp2 = password_hash($_POST['mdp2'], PASSWORD_DEFAULT);
        $mail = $_POST['mail'];
    
        if (empty($prenom)){
            echo "<script type='text/javascript'> alert('Pas de prénom saisi. <br/> Veuillez saisir un prénom.')";
            header('Location: index.php?page=inscription_CR');
            exit();
        }
    
        elseif (empty($nom)){
            echo "<script type='text/javascript'> alert('Pas de nom saisi. <br/> Veuillez saisir un nom.')";
            header('Location: index.php?page=inscription_CR');
            exit();
        }
    
        elseif (empty($mail)){
            echo "<script type='text/javascript'> alert('Pas de mail saisi. <br/> Veuillez saisir un mail.')";
            header('Location: index.php?page=inscription_CR');
            exit();
        }
    
        elseif (empty($mdp)){
            echo "<script type='text/javascript'> alert('Pas de mot de passe saisi. <br/> Veuillez saisir un mot de passe.')";
            header('Location: index.php?page=inscription_CR');
            exit();
        }
    
        elseif (empty($nomEntreprise)){
            echo "<script type='text/javascript'> alert('Pas de nom d'entreprise saisi. <br/> Veuillez saisir un nom d'entreprise.')";
            header('Location: index.php?page=inscription_centreForm');
            exit();
        }
    
    
        elseif($mdp !== $mdp2){
            echo "<script type='text/javascript'> alert('Les mots de passe saisis ne sont pas identiques. <br/> Veuillez saisir des mots de passe identiques.')";
            header('Location: index.php?page=inscription_centreForm');
            exit();
        }
    
    }
    
}

function confirmAccountFr()
{
    $prenom = $_SESSION['prenom'];
    $nom = $_SESSION['nom'];
    $appellation = $_SESSION['appellation'];
    $reception = $_SESSION['mail'];
    $content = "
            <head style='font-family:Montserrat, sans-serif;font-weight:800;'>
                Information concernant la création de votre compte
            </head>

            <body style='font-family:Montserrat, sans-serif;'>
                <a style='font-weight:500;'><br><br>Bonjour, $appellation $prenom $nom <br><br>Vous recevez ce mail pour vous confirmer de la création de votre compte.<br>L'adresse mail correspondant à cette boit mail fait office d'identifiant.<br>Pour des raisons de sécurité le mot de passe n'est pas affiché sur ce mail.<br><br>Nous vous demandons aussi de nous retourner une copie du recto et du verso d'une pièce d'identité.</a>

                <a style='font-weight:500'><br><br>Cordialement</a>
            </body>
            ";
        mailing('[CheckInCube] Création de votre compte', $content, $reception, "$appellation $nom $prenom");
        require('index.php?page=menu_piloteFr');
    
}

function confirmAccountAng()
{
    $prenom = $_SESSION['prenom'];
    $nom = $_SESSION['nom'];
    $appellation = $_SESSION['appellation'];
    $reception = $_SESSION['mail'];
    $content = "
            <head style='font-family:Montserrat, sans-serif;font-weight:800;'>
                Information regarding the creation of your account
            </head>

            <body style='font-family:Montserrat, sans-serif;'>
                <a style='font-weight:500;'><br><br>Dear $appellation $prenom $nom,<br><br>You are receiving this email as you created an account with this email.<br>This mail address will be used as your id to log in.<br>For safety reason we are not communicating by email your password.<br><br>We are asking you to send us by email a copy of your identity card.</a>

                <a style='font-weight:500'><br><br>Sincerely</a>
            </body>
            ";
        mailing('[CheckInCube] Creation of your account', $content, $reception, "$appellation $nom $prenom");
        require('index.php?page=menu_piloteAng');
}

function confirmaccountCF()
{
    $prenom = $_SESSION['prenom'];
    $nom = $_SESSION['nom'];
    $appellation = $_SESSION['appellation'];
    $reception = $_SESSION['mail'];
    $content = "
            <head style='font-family:Montserrat, sans-serif;font-weight:800;'>
                Information concernant la création de votre compte
            </head>

            <body style='font-family:Montserrat, sans-serif;'>
                <a style='font-weight:500;'><br><br>Bonjour, $appellation $prenom $nom <br><br>Vous recevez ce mail pour vous confirmer la création de votre compte.<br>L'adresse mail correspondant à cette boite mail fait office d'identifiant.<br>Pour des raisons de sécurité le mot de passe n'est pas affiché sur ce mail.<br><br>Nous vous demandons aussi de nous retourner une copie du recto et du verso d'une pièce d'identité.</a>

                <a style='font-weight:500'><br><br>Cordialement</a>
            </body>
            ";
    mailing('[CheckInCube] Création de votre compte', $content, $reception, "$appellation $nom $prenom");
    header('Location: index.php?page=menu_centreFr');
    exit();

}

function confirmaccountCR()
{
    $prenom = $_SESSION['prenom'];
    $nom = $_SESSION['nom'];
    $appellation = $_SESSION['appellation'];
    $reception = $_SESSION['mail'];
    $content = "
            <head style='font-family:Montserrat, sans-serif;font-weight:800;'>
                Information concernant la création de votre compte
            </head>

            <body style='font-family:Montserrat, sans-serif;'>
                <a style='font-weight:500;'><br><br>Bonjour, $appellation $prenom $nom <br><br>Vous recevez ce mail pour vous confirmer la création de votre compte.<br>L'adresse mail correspondant à cette boite mail fait office d'identifiant.<br>Pour des raisons de sécurité le mot de passe n'est pas affiché sur ce mail.<br><br>Nous vous demandons aussi de nous retourner une copie du recto et du verso d'une pièce d'identité.</a>

                <a style='font-weight:500'><br><br>Cordialement</a>
            </body>
            ";
    mailing('[CheckInCube] Création de votre compte', $content, $reception, "$appellation $nom $prenom");
    header('Location: index.php?page=menu_centreFr');
    exit();
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
                                <a style='font-weight:500;'></br></br>Dear $appellation $prenom $nom</br></br>You are receiving this email as you are requesting to log in to your account.</br>This email contains a unique and randomly-generated code.</br>Please, enter this code in the associated page while respectinh the typography.</br></br></a>

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
                                <div style='font-family:Montserrat,sans-serif; font-weight:800;'>Procedimiento de doble autentificación</div>
                            </head>

                            <body style='font-family:Montserrat, sans-serif;'>
                                <div style='font-weight:500;'></br></br>Hola, $appellation $prenom $nom</br></br>Recibe este email para conectarse a su cuenta.</br>Este correo electrónico contiene un código generado aleatoriamente y único.</br>Por favor, introduzca el código de abajo de acuerdo con la tipografía.</br></br></div>

                                <div style='font-weight:800; border: 2px solid #777777; margin-left:40%; margin-right:40%; width:20%; border-radius:5px; text-align: center;'> $codeperso </div>

                                <dic style='font-weight:500'></br></br>Cordialmente</div>
                            </body>
                            ";

                    $_SESSION['codeperso'] = $codeperso;

                    mailing('[CheckInCube] Double authentification', $content, $reception, "$appellation $nom $prenom");

                    header('Location: index.php?page=verifymail1Esp');
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
                header('Location: index.php?page=connexionEsp');
                exit();
            }
        }
    }
}

function compareValuesAll()
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
                                <a style='font-weight:500;'></br></br>Dear $appellation $prenom $nom</br></br>You are receiving this email as you are requesting to log in to your account.</br>This email contains a unique and randomly-generated code.</br>Please, enter this code in the associated page while respectinh the typography.</br></br></a>

                                <a style='font-weight:800; border: 2px solid black;'> $codeperso </a>

                                <a style='font-weight:500'></br></br>Sincerely</a>
                            </body>
                            ";

                    $_SESSION['codeperso'] = $codeperso;

                    mailing('[CheckInCube] Double authentification', $content, $reception, "$appellation $nom $prenom");

                    header('Location: index.php?page=verifymail1All');
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
                header('Location: index.php?page=connexionAll');
                exit();
            }
        }
    }
}

function verifymail1()
{
    require('view/verifymail1.php');
}

function verifymail2()
{
    if (isset($_POST['inputcode'])) {
        if ($_POST['inputcode'] == $_SESSION['codeperso']) {
            header('Location: index.php?page=menu_piloteFr');
            exit();
        }
    
        else {
            echo "<script type='text/javascript'> alert('Code incorrect.</br>Vous allez être redirigé pour retenter de vous connecter.')";
            header('Location: index.php?page=connexionFr');
            exit();
        }
    }
    
    else {
        echo "<script type='text/javascript'> alert('Il semle vous n'ayez pas rentrer de code.')";
            header('Location: index.php?page=home');
            exit();
    }
}

function verifymail1Ang()
{
    require('view/verifymail1Ang.php');
}

function verifymail2Ang()
{
    if (isset($_POST['inputcode'])) {
        if ($_POST['inputcode'] == $_SESSION['codeperso']) {
            header('Location: index.php?page=menu_piloteAng');
            exit();
        }
    
        else {
            echo "<script type='text/javascript'> alert('Code incorrect.</br>Vous allez être redirigé pour retenter de vous connecter.')";
            header('Location: index.php?page=ConnexionAng');
            exit();
        }
    }
    
    else {
        echo "<script type='text/javascript'> alert('Il semle vous n'ayez pas rentrer de code.')";
            header('Location: index.php?page=homeAng');
            exit();
    }
}

function verifymail1All()
{
    require('view/verifymail1All.php');
}

function verifymail2All()
{
    if (isset($_POST['inputcode'])) {
        if ($_POST['inputcode'] == $_SESSION['codeperso']) {
            header('Location: index.php?page=menu_piloteAll');
            exit();
        }
    
        else {
            echo "<script type='text/javascript'> alert('Code incorrect.</br>Vous allez être redirigé pour retenter de vous connecter.')";
            header('Location: index.php?page=connexionAll');
            exit();
        }
    }
    
    else {
        echo "<script type='text/javascript'> alert('Il semle vous n'ayez pas rentrer de code.')";
            header('Location: index.php?page=homeAll');
            exit();
    }
}

function verifymail1Esp()
{
    require('view/verifymail1Esp.php');
}

function verifymail2Esp()
{
    if (isset($_POST['inputcode'])) {
        if ($_POST['inputcode'] == $_SESSION['codeperso']) {
            header('Location: index.php?page=menu_piloteEsp');
            exit();
        }
    
        else {
            echo "<script type='text/javascript'> alert('Code incorrect.</br>Vous allez être redirigé pour retenter de vous connecter.')";
            header('Location: index.php?page=connexionEsp');
            exit();
        }
    }
    
    else {
        echo "<script type='text/javascript'> alert('Il semle vous n'ayez pas rentrer de code.')";
            header('Location: index.php?page=homeEsp');
            exit();
    }
}

function rdv()
{
    priseRDV();
}

function rdvForm()
{
    require('view/view_RDV_form.php');
}

function recherche()
{
    require('view/viewRecherche.php');
}

function recherche2()
{
    $id = $_POST['idR'];
    $nom = $_POST['nomR'];
    $prenom = $_POST['prenomR'];
    $mail = $_POST['mailR'];
    $date = $_POST['dateR'];
    $req = getDataPilote($id, $nom, $prenom, $mail);
    require('view/viewRecherche2.php');
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