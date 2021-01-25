<?php

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

$id = $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$date = $_POST['date'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeFr</title>
    <link rel="stylesheet" href="/style/recherche2.css"/>
    <link rel="icon" type="image/png" href="Ressources/Medias/LogoWebSite_1.png" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="fontawesome/fontawesome-free-5.15.1-web/css/all.css"/>

</head>

<?php require('headerpilote.php'); ?>

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
while ($pilote = $sql->fetch(PDO::FETCH_ASSOC)) {
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