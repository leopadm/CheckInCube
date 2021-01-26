<?php

function writeCF($nom, $prenom, $mail, $mdp, $genre, $appellation, $date, $nomEntreprise, $poste){
    $bdd = new PDO('mysql:host=localhost;dbname=checkincube;charset=utf8','root','root');
    $str = "INSERT INTO centre_formation (nom, prenom, mail, mot_de_passe, genre, appellation, date_naissance, nomEntreprise, poste) VALUES (':nom', ':prenom', ':mail', ':mdp', ':genre', ':appellation', ':date', ':nomEntreprise ', ':poste');";
    $sql = $bdd->prepare($str);    
    $sql->bindValue(":nom", $nom, PDO::PARAM_STR);
    $sql->bindValue(":prenom", $prenom, PDO::PARAM_STR);
    $sql->bindValue(":mail", $mail, PDO::PARAM_STR);
    $sql->bindValue(":mdp", $mdp, PDO::PARAM_STR);
    $sql->bindValue(":genre", $genre, PDO::PARAM_STR);
    $sql->bindValue(":appellation", $appellation, PDO::PARAM_STR);
    $sql->bindValue(":date", $date, PDO::PARAM_INT);
    $sql->bindValue(":nomEntreprise", $nomEntreprise, PDO::PARAM_STR);
    $sql->bindValue(":poste", $poste, PDO::PARAM_STR);
    $sql->execute();
}



?>

