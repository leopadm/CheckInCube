<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PageConnexion</title>
    <link rel="stylesheet" href="/style/PageConnexion.css">
</head>
<body>
<div class="ImageBG">
    <img src="Ressources/Medias/Image14.jpg" width="100%" alt="Image">
</div>

<form class="Window" action="index.php?page=compareValuesEsp" method="post">
    <label class="Sub1">Página de inicio de sesión</label>
    <div class="Sub2">
        <label for="username">Usario:</label>
        <input type="text" id="username" name="inputUser" value="mail@exemple.fr">
    </div>
    <div class="Sub3">
        <label for="pass">Contraseña:</label>
        <input type="password" id="pass" name="inputPassword" minlength="8" value="#MotDePasse#" required>
    </div>
    <div class="Sub4">
        <input class="LogIn" type="submit" value="Iniciar de session"/>
    </div>
</form>

</body>
</html>
