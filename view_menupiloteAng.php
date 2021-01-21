<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="CerveauAPP.png">
    <title>PsychoTech Industries</title>
    <link rel="stylesheet" type="text/css" href="menupilote.css" media="screen">
</head>


    <header>
    <nav class="navigation">
      <ul>
      <li class="deroulant1"><a href="#">Menu</a>
          <ul class="sous1">
            <li><a href="#">mon compte</a></li>
            <li><a href="#">mes analyses</a></li>
            <li><a href="#">mon historique</a></li>
            <li><a href="#">mes rendez-vous</a></li>
            <li><a href="#">favoris</a></li>
            <li><a href="#">lieux d'analyses proche</a></li>
            <li><a href="#">se déconnecter</a></li>
          </ul>
      </li>
    </ul>
    <ul>
        <li ><a href="#"><img src="LogoWebSite_1.png" alt="Logo" class="LogoWS"/></a></li>
    </ul>
    <ul>
        <li class="about"><a href="#">A propos</a></li>
        <li class="contact"><a href="#" >Contact</a></li>
      <li class="deroulant"><a href="#">Langues </a>
            <ul class="sous">
                <li><a href="#">Français<img src="France.png" height="40px" width="50px" /></a></li>
                <li><a href="#">English<img src="UK.png" height="50px" width="50px" /></a></li>
                <li><a href="#">Deutsch<img src="Allemagne.png" height="40px" width="50px" /></a></li>
                <li><a href="#">Español<img src="espagne.png" height="40px" width="50px" /></a></li>
            </ul>
        </li>
        <li class="welcome"><a href="#" >Bienvenue <?=$_SESSION['prenom']?> <?=$_SESSION['nom']?> </a></li>
    </ul>
    </nav>
    </header>


<body>
    

    <div id="bloc">
        <div id="analyses">
            <p>Mes analyses</p>
        </div>
        <div id="image">
            <a href="graphique.png"><img src="graphique.png" width=33%></a>
            <a href="réaction.png"><img src="réaction.png" width="33%"></a>
            <img src="niveau.png" width="33%"><br>
            <p>0</p>
        </div>
    </div>

    <div id="rdv">
        <div id="réserver">
            <p>Réserver un rendez-vous</p>
            <input type="date" />
        </div>
        <div id="press">
            <button class="favorite styled"
            type="button">
            Rechercher
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
      <p>contact</p>
    </div>
  </div>

</body>
</html>
