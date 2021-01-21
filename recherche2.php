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

    function getTable($table, $value1, $value2, $value3, $value4){
        $bdd = connectBDD();
        $sql = "SELECT * FROM $table WHERE nom LIKE '%$value1%' AND prenom LIKE '%$value2%' AND mail LIKE '%$value3%' AND date_naissance LIKE '%$value4%';";
        return($bdd->query($sql));
    }

    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $date = $_POST['date'];
    $pilote1 = getTable('pilote', $nom, $prenom, $mail, $date);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeFr</title>
    <link rel="stylesheet" href="recherche2.css"/>
    <link rel="icon" type="image/png" href="Ressources/Medias/LogoWebSite_1.png" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="fontawesome/fontawesome-free-5.15.1-web/css/all.css"/>

</head>

<?php require('header.php'); ?>

<body>

<h1>Recherche de pilotes</h1>

<div class="tableContainer">
<table>
    <form method="post">
        <thead>
            <tr style="text-align: center;">
                <th><button type="reset" class="icon1"><i class="fas fa-times"></i></button></th>
                <th><i class="fas fa-tag"></i> 
                    <input type="text" class="searchID" name="id" placeholder="ID" value=""></th>
                <th>Nom: <input type="text" name="nom" placeholder="firstname" value=""></th>
                <th>Prenom: <input type="text" name="prenom" placeholder="lastname" value=""></th>
                <th><i class="fas fa-envelope"></i> 
                    <input type="text" name="mail" placeholder="email" value=""></th>
                <th><i class="fas fa-birthday-cake"></i> 
                    <input type="text" name="date" placeholder="birthday" value=""></th>
                <th><button type="submit" class="icon2"><i class="fas fa-search"></i></button></th>
            </tr>
        </thead>
    </form>


<tbody>
<?php
while ($pilote = $pilote1->fetch()) {
    $id = $pilote['id'];
    $prenom = $pilote['prenom'];
    $nom = $pilote['nom'];
    $appellation = $pilote['appellation'];
    $mail = $pilote['mail'];
    $date = $pilote['date_naissance'];

    echo "
    
    <tr>
        <td></td>
        <td>$id</td>
        <td>$nom</td>
        <td>$prenom</td>
        <td>$mail</td>
        <td>$date</td>
        <td></td>
    </tr>
    ";
}
?>
</tbody>
</table>
</div>



</body>

</html>