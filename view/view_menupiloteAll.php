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
    <li class="about"><a href="#">Über uns</a></li>
    <li class="contact"><a href="#" >Kontakt</a></li>
      <li class="deroulant1"><a href="#">Menü</a>
          <ul class="sous1">
            <li><a href="#">meine Konto</a></li>
            <li><a href="#">Forschung</a></li>
            <li><a href="#">meine Analysen</a></li>
            <li><a href="#">meine Geschichte</a></li>
            <li><a href="#">meine Termine</a></li>
            <li><a href="#">Orte für Analyse </a></li>
            <li><a href="#">Ausloggen</a></li>
          </ul>
      </li>
    </ul>
    <ul>
      <li class="deroulant"><a href="#">Sprachen </a>
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
  <p> Willkommen <?php echo $user ?> </p>
  <p> Danke für die Verwendung CheckInCube </p>
</div>

<div id="bouton">
  <button class="favorite styled"
          type="button" onclick="Message()">
        Forschung
      </button>
      <p><br/></p>
  <button class="favorite styled"
          type="button" onclick="Message()">
        Analysen
      </button>
      <p><br/></p>
  <button class="favorite styled"
          type="button" onclick="Message()">
        Geplanter Termin
      </button>
</div>

</body>
</html>