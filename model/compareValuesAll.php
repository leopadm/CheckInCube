<?php

$user = 'root';
$password = 'root';
$db = 'checkincube';
$host = 'localhost';
$port = 3306;

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

function getTable($table){
    $bdd = connectBDD();
    $sql = "SELECT * FROM $table";
    return($bdd->query($sql));
}


if(isset($_POST['inputUser']) && isset($_POST['inputPassword'])){
    $inputUser = $_POST['inputUser'];
    $inputPassword = $_POST['inputPassword'];
    $tpilote = getTable('pilote');
    while($pilote = $tpilote->fetch()){
        if ($pilote['identifiant'] == $inputUser)
            if ($pilote['mot_de_passe'] == $inputPassword){
                session_start();
                $_SESSION['prenom'] = $pilote['prenom'];
                $_SESSION['nom'] = $pilote['nom'];
                require 'view_menupiloteAng.html';
            }

    }
}



?>
