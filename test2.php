<?php

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
    $sql = "INSERT INTO pilote (nom, prenom, mail, mot_de_passe, genre, appellation) VALUES ('$nom', '$prenom', '$mail', '$mdp', '$genre', '$appellation');";
    $bdd->query($sql);
}


write('Raux', 'Raphael', 'raux@gmail.com', 'raph1234', 'homme', 'M.');







?>