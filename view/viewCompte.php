<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="CerveauAPP.png">
	<title>PsychoTech Industries</title>
	<link rel="stylesheet" type="text/css" href="compte.css" media="screen">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>



<?php require('headerpilote.php')?>


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

    </html>