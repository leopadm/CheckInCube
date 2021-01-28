<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription entreprise</title>

    <link rel="stylesheet" type="text/css" href="/style/inscription_centre.css">
</head>

<?php require('header.php'); ?>

<body>

<form name="inscriptionentreprise" method="post" action="index.php?page=writeValuesCR">
    <div class="wrapper">
        <div class="formulaire">
            <div id="partie1">
                <span class="titre"> Genre </span> <br/>
                <label><input type="radio" name="sexe" value="homme" class="option-input radio"/>Homme</label>
                <label><input type="radio" name="sexe" value="femme" class="option-input radio"/>Femme</label><br/>

                <span class="titre"> Civilité </span> <br/>
                <label> <input type="radio" name="civilite" value="M." class="option-input radio"/>M.</label>
                <label><input type="radio" name="civilite" value="Mlle" class="option-input radio"/> Mlle</label>
                <label><input type="radio" name="civilite" value="Mme" class="option-input radio"/> Mme</label> <br/>

                <span class="titre">Date de naissance</span>
                <label><input type="date" name="dateNaissance" class="dateNaissance"></label>

            </div>

            <div id="coordonnées">
                    <input type="text" name="nom" class="input" placeholder="Nom">
                    <input type="text" name="prenom" class="input" placeholder="Prénom">
                    <input type="text" name="nomEntreprise" class="input" placeholder="Nom de l'entreprise">
                    <input type="text" name="poste" class="input" placeholder="Poste dans l'entreprise">
                    <input type="email" name="mail" class="input" placeholder="Mail">
                    <input type="password" name="mdp" class="input" placeholder="Mot de passe">
                    <input type="password" name="mdp2" class="input" placeholder="Confirmation du mot de passe">
            </div>
            <input type="submit" value="Valider mon inscription" id="submit">
        </div>
    </div>
</form>

</body>

<?php require('footer.php'); ?>

</html>