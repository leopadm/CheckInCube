<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nous contacter</title>
    <link rel="stylesheet" href="style/contact.css"/>
</head>

<?php require('headerpilote.php'); ?>

<body>

<div class="wrapper">
    <div class="formulaire-contact">
        <div class="informations">
            <input type="text" class="input" placeholder="Nom">
            <input type="text" class="input" placeholder="Mail">
            <input type="text" class="input" placeholder="Téléphone">
            <input type="text" class="input" placeholder="Objet">

        </div>

        <div class="message">
            <textarea placeholder="Message"></textarea>
            <div class="btn">Envoyer</div>
        </div>
    </div>
</div>

</body>

<?php require('footer.php');?>

</html>