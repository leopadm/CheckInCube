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

<?php require('headerpiloteAll.php'); ?>

<body>
  
<div id="presentation">
  <p> Willkommen <?php echo $user ?> </p>
  <p> Danke für die Verwendung CheckInCube </p>
</div>

<div id="bouton">
  <button class="favorite styled" type="button" href="index.php?page=recherche">
        Forschung
      </button>
  <button class="favorite styled" type="button" href="index.php?page=">
        Analysen
      </button>
    <button class="favorite styled" type="button" href="index.php?page=">
        Geplanter Termin
      </button>
</div>

</body>
</html>