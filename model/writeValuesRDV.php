<?php

function writeRDV($nom, $prenom, $mail, $heureRDV, $dateRDV){
    $bdd = new PDO('mysql:host=localhost;dbname=checkincube;charset=utf8','root','root');
    $str = "INSERT INTO contact (nom, prenom, mail, heureRDV, dateRDV) VALUES (':nom', ':prenom', ':mail', ':heureRDV', ':dateRDV');";
    $sql = $bdd->prepare($str);    
    $sql->bindValue(":nom", $nom, PDO::PARAM_STR);
    $sql->bindValue(":prenom", $prenom, PDO::PARAM_STR);
    $sql->bindValue(":mail", $mail, PDO::PARAM_STR);
    $sql->bindValue(":heureRDV", $mdp, PDO::PARAM_STR);
    $sql->bindValue(":dateRVD", $date, PDO::PARAM_INT);
    $sql->execute();
}
?>