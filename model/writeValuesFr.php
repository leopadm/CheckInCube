<?php

session_start();

function write($nom, $prenom, $mail, $mdp, $genre, $appellation, $date){
    $bdd = new PDO('mysql:host=localhost;dbname=checkincube;charset=utf8','root','root');
    $str = "INSERT INTO pilote (nom, prenom, mail, mot_de_passe, genre, appellation, date_naissance) VALUES (':nom', ':prenom', ':mail', ':mdp', ':genre', ':appellation', ':date');";
    $sql = $bdd->prepare($str);    
    $sql->bindValue(":nom", $nom, PDO::PARAM_STR);
    $sql->bindValue(":prenom", $prenom, PDO::PARAM_STR);
    $sql->bindValue(":mail", $mail, PDO::PARAM_STR);
    $sql->bindValue(":mdp", $mdp, PDO::PARAM_STR);
    $sql->bindValue(":genre", $genre, PDO::PARAM_STR);
    $sql->bindValue(":appellation", $appellation, PDO::PARAM_STR);
    $sql->bindValue(":date", $date, PDO::PARAM_INT);
    $sql->execute();
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

?>

