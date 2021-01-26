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

    <form class="Window" action="index.php?page=verifymail2Esp" method="post">
        <label class="Sub1">Doble autentificación :</label>
        <div class="Sub2">
            <label id="txt">Recibió un código por correo electrónico.</label>
            <label for="username"> Por favor, introduzca este código recibido de acuerdo con la tipografía:</label>
            <input type="text" id="username" name="inputcode" value="Código de 10 caracteres">
        </div>

        <div class="Sub4">
            <input class="LogIn" type="submit" value="Entregar"/>
        </div>
    </form>

</body>
</html>