<?php

session_start();

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


function write($nom, $prenom, $mail, $mdp, $genre, $appellation){
    $bdd = connectBDD();
    $sql = "INSERT INTO pilote (nom, prenom, mail, mot_de_passe, genre, appellation) VALUES ('$nom', '$prenom', '$mail', '$mdp', $genre, $appellation);";
    $bdd->query($sql);
}


$bdd = connectBDD();
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
        header('Location: inscription_piloteFr.html');
    }

    elseif (empty($nom)){
        echo "<script type='text/javascript'> alert('Pas de nom saisi. <br/> Veuillez saisir un nom.')";
        header('Location: inscription_piloteFr.html');
    }

    elseif (empty($mail)){
        echo "<script type='text/javascript'> alert('Pas de mail saisi. <br/> Veuillez saisir un mail.')";
        header('Location: inscription_piloteFr.html');
    }

    elseif (empty($mdp)){
        echo "<script type='text/javascript'> alert('Pas de mot de passe saisi. <br/> Veuillez saisir un mot de passe.')";
        header('Location: inscription_piloteFr.html');
    }

    elseif($mdp !== $mdp2){
        echo "<script type='text/javascript'> alert('Les mots de passe saisis ne sont pas identiques. <br/> Veuillez saisir des mots de passe identiques.')";
        header('Location: inscription_piloteFr.html');
    }

}


