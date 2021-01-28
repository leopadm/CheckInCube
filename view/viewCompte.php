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
$prenom = "jean";
$nom = "dupont";
$email = "jean.dupont@gmail.com";
$birthdate = "2000-08-05";
$civilite = "Monsieur";
?>
    <body>

    	
    	<div id="compte">

    	<p> Prénom : <?php echo  $prenom ?> </p> <br/> 
    	<p> Nom : <?php echo  $nom ?> </p> <br/> 
    	<p> Mail : <?php echo  $email ?> </p> <br/>
    	<p> Date de naissance : <?php echo  $birthdate ?> </p> <br/>
    	<p> Civilité : <?php echo  $civilite ?> </p> <br/>
    	

    	</div>

      <div id="form">

      <form method="POST">
      <label for="prenom">Prénom : </label> <br>
      <input type="text" id="prenom" name="prenom"><br>
      <label for="nom">Nom : </label><br>
      <input type="text" id="nom" name="nom" ><br><br>
      <label for="email">email : </label> <br>
      <input type="text" id="email" name="email"><br>
      <label for="birthday">date d'anniversaire : </label><br>
      <input type="text" id="birthday" name="birthday" ><br><br>
      <label for="civilite">Civilité : </label><br>
      <input type="text" id="civilite" name="civilite" ><br><br>
      </form>

      </div>

    </body>

    </html>