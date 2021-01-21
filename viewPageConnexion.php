<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PageConnexion</title>
    <link rel="stylesheet" href="PageConnexion.css">
    <link rel="icon" type="image/png" href="Ressources/Medias/LogoWebSite_1.png" />
</head>
<body>
    <div class="ImageBG">
        <img src="Ressources/Medias/Image14.jpg" width="100%" alt="Image">
    </div>

    <form class="Window" action="compareValues.php" method="post">
        <label class="Sub1">Page de Connexion</label>
        <div class="Sub2">
            <label for="username">Identifiant:</label>
            <input type="text" id="username" name="inputUser" placeholder="mail@exemple.fr">
        </div>
        <div class="Sub3">
            <label for="pass">Mot de passe:</label>
            <input type="password" id="pass" name="inputPassword" minlength="8" placeholder="#MotDePasse#" required>
        </div>
        <div class="Sub4">
            <input class="LogIn" type="submit" value="Valider"/>
        </div>
    </form>

</body>
</html>


