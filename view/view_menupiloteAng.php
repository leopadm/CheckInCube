<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="Ressources/medias/LogoWebSite_1.png">
	<title>PsychoTech Industries</title>
	<link rel="stylesheet" type="text/css" href="style/compte.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<?php require('headerpiloteAng.php'); ?>

<body>

<div id="bouton">
  <a href="index.php?page=recherche">
  <div class="favorite styled">
    My analyses
  </div></a>
  <a href="index.php?page=recherche">
  <div class="favorite styled">
    Scheduled appointment
  </div></a>
</div>

</body>
<?php require('footer.php'); ?>

</html>