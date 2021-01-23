<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification adresse mail</title>
    <link rel="stylesheet" href="verifymail1.css">
</head>
<body>
    <div class="ImageBG">
        <img src="Ressources/Medias/Image14.jpg" width="100%" alt="Image">
    </div>

    <form class="Window" action="verifymail2.php" method="post">
        <label class="Sub1">Two steps authentification procedure</label>
        <div class="Sub2">
            <label id="txt">You are shortly going to receive an email.</label>
            <label for="username">Please enter the code received while respecting the typography:</label>
            <input type="text" id="username" name="inputcode" value="10-characters code">
        </div>

        <div class="Sub4">
            <input class="LogIn" type="submit" value="Valider"/>
        </div>
    </form>

</body>
</html>