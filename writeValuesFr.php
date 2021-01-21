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


function write($nom, $prenom, $mail, $mdp, $genre, $appellation, $date){
    $bdd = connectBDD();
    $sql = "INSERT INTO pilote (nom, prenom, mail, mot_de_passe, genre, appellation, date_naissance) VALUES ('$nom', '$prenom', '$mail', '$mdp', '$genre', '$appellation', '$date');";
    $bdd->query($sql);
}

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

            header('Location: confirmaccountFr.php');
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

            header('Location: confirmaccountFr.php');
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

            header('Location: confirmaccountFr.php');
            exit();
        }         
    }
}


?>

