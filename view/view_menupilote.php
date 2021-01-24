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
	<link rel="icon" type="image/png" href="CerveauAPP.png">
	<title>PsychoTech Industries</title>
	<link rel="stylesheet" type="text/css" href="compte.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<header>
	<nav class="navigation">
	  <ul>
	  <li class="accueil"><a href="#">CheckInCube</a></li>
    <li class="about"><a href="#">A propos</a></li>
    <li class="contact"><a href="#" >Contact</a></li>
      <li class="deroulant1"><a href="#">Menu</a>
          <ul class="sous1">
            <li><a href="#">mon compte</a></li>
            <li><a href="#">Recherche</a></li>
            <li><a href="#">mes analyses</a></li>
            <li><a href="#">mon historique</a></li>
            <li><a href="#">mes rendez-vous</a></li>
            <li><a href="#">lieux d'analyses</a></li>
            <li><a href="#">se déconnecter</a></li>
          </ul>
      </li>
    </ul>
    <ul>
      <li class="deroulant"><a href="#">Langues </a>
      		<ul class="sous">
        		<li><a href="#">Français<img src="France.png" height="40px" width="50px" /></a></li>
        		<li><a href="#">English<img src="UK.png" height="50px" width="50px" /></a></li>
        		<li><a href="#">Deutsch<img src="Allemagne.png" height="40px" width="50px" /></a></li>
        		<li><a href="#">Español<img src="espagne.png" height="40px" width="50px" /></a></li>
      		</ul>
    	</li>
  	</ul>
  	</nav>
  	</header>

<body>
  
<div id="presentation">
  <p> Bienvenue <?php echo $user ?> </p>
  <p> Merci d'utiliser CheckInCube </p>
</div>

<div id="bouton">
  <button class="favorite styled"
          type="button" onclick="Message()">
        Recherche
      </button>
      <p><br/></p>
  <button class="favorite styled"
          type="button" onclick="Message()">
        Analyses
      </button>
      <p><br/></p>
  <button class="favorite styled"
          type="button" onclick="Message()">
        Rendez-vous prévu
      </button>
</div>

</body>
</html>






