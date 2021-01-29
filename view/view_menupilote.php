<?php
session_start();
?>

<!--
<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeFr</title>
    <link rel="stylesheet" href="menupilote.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
</head>
<body>

<header>
    <nav class="navigation">
        <ul class="langues">
            <li><a href="view_menupiloteAng.php"><img src="Ressources/Medias/Ang.png" class="icone" alt="Anglais"></a></li>
            <li><a href="HomeAll.html"><img src="Ressources/Medias/All.png" class="icone" alt="Allemand"></a></li>
            <li><a href="HomeEsp.html"><img src="Ressources/Medias/Esp.png" class="icone" alt="Espagnol"></a></li>
        </ul>


        <a href="viewHomeFr.php"><img src="Ressources/Medias/LogoWebSite_1.png" alt="Logo" class="LogoWS"></a>

        <ul class="Menu">
            <li><a>Bienvenue </a></li>
            <li><a class="TopText" href="#"> Se déconnecter</a></li>
        </ul>
    </nav>
</header>

<div class="imageBG">
    <img src="Ressources/Medias/Image19-2.jpg" width="100%" alt="Background image"/>
</div>

<div class="Container">
    <div class="Text">
        <a>
            CheckInCube, la solution pour réaliser des tests psychotechniques rapidement et avec un maximum de fiabilité pour garantir la sécurité de vos voyageurs. Des résultats disponibles instantanément et à consulter à tout moment.
            Vous souhaitez réserver un rendez-vous pour réaliser ces tests ?
            Vous êtes un pilote, un centre de recherche ou un centre de formation ?
            N’hésitez plus, inscrivez-vous !
        </a>
    </div>

    <div class="Image10">
        <img src="Ressources/Medias/Image10.jpeg" height="100%" alt="Image">
    </div>
</div>

<footer class="footer-distributed">
    <div class="footer-gauche">
        <h3> About <span>PsychoTech</span></h3>
        <p class="liens-footer">
            <a href="inscription.html">Accueil</a>
            |
            <a href="inscription.html">A propos</a>
            |
            <a href="inscription.html">Nous contacter</a>
            |
            <a href="inscription.html">Mentions Légales</a>
            |
            <a href="inscription.html">Plan du site</a>
        </p>

        <p class="footer-nom-entreprise">© 2020 PsychoTech</p>

    </div>

    <div class="footer-centre">
        <div>
            <p>28 rue Notre-Dame des Champs,
            ISEP, PARIS 75006, France</p>
        </div>
        <div>
            <p>01 49 54 52 00</p>
        </div>
        <div>
            <p><a href="home.html">contact@psychotech.fr</a></p>
        </div>

    </div>

    <div class="footer-droite">
        <p class="footer-entreprise">
            <span> A propos de l'entreprise</span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id facilisis ligula. Quisque sit amet urna sed tortor ultrices ultricies. Cras eleifend tristique nunc et porttitor. Etiam id sem ac ante varius blandit. Morbi tincidunt hendrerit dui. Integer convallis tortor eu sapien sodales ultrices.
        </p>
    </div>

</footer>

</body>
</html>
-->


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="Ressources/Medias/LogoWebSite_1.png">
	<title>PsychoTech Industries</title>
	<link rel="stylesheet" type="text/css" href="style/compte.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<?php require('headerpilote.php'); ?>

<body>

<div id="bouton">
<a href="index.php?page=rdvForm">
<div class="favourite styled">
    Prendre Rendez-vous
</div></a>
<a href="index.php?page=recherche">
<div class="favorite styled">
    Mes analyses
</div></a>
<a href="index.php?page=recherche">
<div class="favorite styled">
    Rendez-vous prévu
</div></a>
</div>

<div class="" style="width:100%; height:10%;">
</div>

</body>

<?php require('footer.php'); ?>

</html>






