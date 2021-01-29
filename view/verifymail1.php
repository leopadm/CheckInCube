<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vérification adresse mail</title>
    <link rel="stylesheet" href="/style/verifymail1.css">
</head>
<body>
    <div class="ImageBG">
        <img src="Ressources/Medias/Image14.jpg" width="100%" alt="Image">
    </div>

    <form class="Window" action="index.php?page=verifymail2" method="post">
        <label class="Sub1">Double authentification</label>
        <div class="Sub2">
            <label id="txt">Vous avez reçu un code par mail.</label>
            <label for="username">Veuillez entrer ledit code reçu en respectant la typographie:</label>
            <input type="text" id="username" name="inputcode" placeholder="Code à dix charactères">
        </div>

        <div class="Sub4">
            <input class="LogIn" type="submit" value="Valider"/>
        </div>
    </form>

</body>
</html>


