<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeFr</title>
    <link rel="stylesheet" href="/style/recherche.css"/>
    <link rel="icon" type="image/png" href="Ressources/Medias/LogoWebSite_1.png" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="fontawesome/fontawesome-free-5.15.1-web/css/all.css"/>

</head>

<?php require('header.php'); ?>

<body>
<h1>Recherche de pilotes</h1>
<div class="tableContainer">
    <table>
        <form action="index.php?page=recherche2" method="post">
            <thead>
                <tr style="text-align: center;">
                    <th><button type="reset" class="icon1"><i class="fas fa-times"></i></button></th>
                    <th><i class="fas fa-tag"></i> 
                        <input type="text" class="searchID" name="idR" placeholder="ID" value=""></th>
                    <th>Nom: <input type="text" name="nomR" placeholder="firstname" value=""></th>
                    <th>Prenom: <input type="text" name="prenomR" placeholder="lastname" value=""></th>
                    <th><i class="fas fa-envelope"></i> 
                        <input type="text" name="mailR" placeholder="email" value=""></th>
                    <th><i class="fas fa-birthday-cake"></i></th>
                    <th><i class="fas fa-venus-mars"></i></th>
                    <th><button type="submit" class="icon2"><i class="fas fa-search"></i></button></th>
                </tr>
            </thead>
        </form>
    </table>
</div>
</body>

<?php require('footer.php'); ?>

</html>