<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="CerveauAPP.png">
    <title>PsychoTech Industries</title>
    <link rel="stylesheet" type="text/css" href="/style/menupilote.css" media="screen">
</head>


    <header>
    <nav class="navigation">
      <ul>
      <li class="deroulant1"><a href="#">Menu</a>
          <ul class="sous1">
            <li><a href="#">My account</a></li>
            <li><a href="#">My tests</a></li>
            <li><a href="#">My hystory</a></li>
            <li><a href="#">My appointments</a></li>
            <li><a href="#">Favourites</a></li>
            <li><a href="#">Disconnect</a></li>
          </ul>
      </li>
    </ul>
    <ul>
        <li ><a href="#"><img src="LogoWebSite_1.png" alt="Logo" class="LogoWS"/></a></li>
    </ul>
    <ul>
        <li class="about"><a href="#">About</a></li>
        <li class="contact"><a href="#" >Contact</a></li>
        <li class="deroulant"><a href="#">Languages </a>
            <ul class="sous">
                <li><a href="view_menupilote.php">French<img src="/Ressources/Medias/Fra.png" height="40px" width="50px" /></a></li>
                <li><a href="/Ressources/Medias/All.png">German<img src="Allemagne.png" height="40px" width="50px" /></a></li>
                <li><a href="/Ressources/Medias/Esp.png">Spanish<img src="espagne.png" height="40px" width="50px" /></a></li>
            </ul>
        </li>
        <li class="welcome"><a href="#" >Bienvenue <?=$_SESSION['prenom']?> <?=$_SESSION['nom']?> </a></li>
    </ul>
    </nav>
    </header>


<body>
    

    <div id="bloc">
        <div id="analyses">
            <p>My analysis</p>
        </div>
        <div id="image">
            <a href="graphique.png"><img src="graphique.png" width=33%></a>
            <a href="reaction.png"><img src="réaction.png" width="33%"></a>
            <img src="niveau.png" width="33%"><br>
            <p>0</p>
        </div>
    </div>

    <div id="rdv">
        <div id="reserver">
            <p>Make an appointment</p>
            <input type="date" />
        </div>
        <div id="press">
            <button class="favorite styled"
            type="button">
            Search
            </button>
            <p>c</p>
        </div>
    </div>

    <div id="recherche">
        <div id="rechercher">
            <p>Recherche</p>
            <div id="searchbar">
                <form action="" class="formulaire">
               <input class="champ" type="text" value=""/>
                    <input class="bouton" type="button" value="Rechercher" />   
                </form>
            </div>
        <div id = "saut">
        <p>e</p>
      </div>
        </div>
    </div>

  <div id="Contact">
    <div id="contacter">
      <p>Contact</p>
    </div>
  </div>

</body>
</html>
