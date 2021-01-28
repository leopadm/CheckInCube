<?php

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
    return $sql;
}
?>

