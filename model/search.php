<?php
function getDatasPilote($id, $nom, $prenom, $mail)
{
    $id = "%$id%";
    $nom = "%$nom%";
    $prenom = "%$prenom%";
    $mail = "%$mail%";
    $bdd = new PDO('mysql:host=localhost;dbname=checkincube;charset=utf8','root','root');
    $str = "SELECT * FROM pilote WHERE id LIKE :id AND nom LIKE :nom AND prenom LIKE :prenom AND mail LIKE :mail ;";
    $sql = $bdd->prepare($str);
    $sql->bindParam(":id", $id);    
    $sql->bindParam(":nom", $nom);
    $sql->bindParam(":prenom", $prenom);
    $sql->bindParam(":mail", $mail);
    $sql->execute();

    return $sql;
}
?>