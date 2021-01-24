<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="CerveauAPP.png">
	<title>PsychoTech Industries</title>
	<link rel="stylesheet" type="text/css" href="compte.css" media="screen">
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


<?php 
$prenom = 10;
$nom = 10;
$email = "jean.dupont@gmail.com";
$birthdate = "2000-08-05";
$civilite = Monsieur;
?>
    <body>

    	
    	<div id="compte">

    	<p> Prénom : <?php echo  $prenom ?> </p> <br/> 
    	<p> Nom : <?php echo  $nom ?> </p> <br/> 
    	<p> Mail : <?php echo  $email ?> </p> <br/>
    	<p> Date de naissance : <?php echo  $birthdate ?> </p> <br/>
    	<p> Civilité : <?php echo  $civilite ?> </p> <br/>
    	

    	</div>

    </body>