<?php

echo "Bravo!";

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

$nom = $_COOKIE['nom'];
$prenom = $_COOKIE['prenom'];


function write($nom, $prenom){
    $bdd = connectBDD();
    $sql = "INSERT INTO pilote (nom, prenom, mail, mot_de_passe, genre, appellation) VALUES ('$nom', '$prenom');";
    $bdd->query($sql);
    echo $sql;
}

write($nom, $prenom);
?>