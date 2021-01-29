<?php
function getDataPilote($nom, $prenom, $mail)
{
    $nom = "%$nom%";
    $prenom = "%$prenom%";
    $mail = "%$mail%";
    $bdd = new PDO('mysql:host=localhost;dbname=checkincube;charset=utf8','root','root');
    $str = "SELECT id FROM pilote WHERE nom LIKE :nom AND prenom LIKE :prenom AND mail LIKE :mail ;";
    $sql = $bdd->prepare($str);  
    $sql->bindParam(":nom", $nom);
    $sql->bindParam(":prenom", $prenom);
    $sql->bindParam(":mail", $mail);
    $sql->execute();

    return $sql;
}
?>