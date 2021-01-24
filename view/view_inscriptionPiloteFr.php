<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" type="text/css" href="style/inscriptionPilote.css">
</head>

<?php require('header.php'); ?>

<body>

<form method="post" action="index.php?page=writeValuesFr">
    <div class="wrapper">
        <div class="formulaire">
            <div id="partie1">
                    <span class="titre"> Genre </span>
                    <label><input type="radio" name="sexe" value="homme" class="option-input radio"/>Homme</label>
                    <label><input type="radio" name="sexe" value="femme" class="option-input radio"/>Femme</label><br/>

                    <span class="titre"> Civilité </span>
                    <label><input type="radio" name="civilite" value="M." class="option-input radio"/>M.</label>
                    <label><input type="radio" name="civilite" value="Mlle" class="option-input radio"/> Mlle</label>
                    <label><input type="radio" name="civilite" value="Mme" class="option-input radio"/> Mme</label> <br/>

                    <span class="titre">Date de naissance</span>
                    <label> <input type="date" name="dateNaissance" class="dateNaissance"></label>
            </div>

            <div id="coordonnées">
                <input type="text" class="input" name="nom" placeholder="Nom">
                <input type="text" class="input" name="prenom" placeholder="Prénom">
                <input type="text" class="input" name="mail" placeholder="Mail">
                <input type="text" class="input" name="mdp" placeholder="Mot de passe">
                <input type="text" class="input" name="mdp2" placeholder="Confirmation du mot de passe">
            </div>
            <input type="submit" value="Valider mon inscription" id="submit">
        </div>
    </div>
</form>

</body>

<?php require('footer.php'); ?>

</html>