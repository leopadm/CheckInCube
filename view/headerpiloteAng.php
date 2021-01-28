<head>
  <link rel="stylesheet" type="text/css" href="style/header.css">
</head>

<header>
    <nav class="navigation">
        <ul class="langues">
		<li><a href="index.php?page=menu_piloteFr"><img src="Ressources/Medias/Fra.png" class="icone" alt="Anglais"></a></li>
            <li><a href="index.php?page=menu_piloteAng"><img src="Ressources/Medias/Ang.png" class="icone" alt="Anglais"></a></li>
            <li><a href="index.php?page=menu_piloteAll"><img src="Ressources/Medias/All.png" class="icone" alt="Allemand"></a></li>
            <li><a href="index.php?page=menu_piloteEsp"><img src="Ressources/Medias/Esp.png" class="icone" alt="Espagnol"></a></li>
        </ul>
        
        <a href="/index.php?page=home"><img src="Ressources/Medias/LogoWebSite_1.png" alt="Logo" class="LogoWS"></a>
        
        <ul class="Menu">
			<li><a>Welcome <?= $_SESSION['appellation']?> <?=$_SESSION['prenom']?> <?=$_SESSION['nom']?></a></li>
            <li><a href="index.php?page=categorieConnexion" class="TopText">Your account</a></li>
            <li><a href="index.php?page=homeAng" class="TopText">Log out</a></li>
        </ul>
    </nav>
</header>