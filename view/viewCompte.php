<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="Ressources/Medias/LogoWebSite81.png">
	<title>PsychoTech Industries</title>
	<link rel="stylesheet" type="text/css" href="style/compte.css" media="screen">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>



<?php require('headerpilote.php')?>


<body>

  
  <div id="compte">

  <p> Prénom : <?= $prenom?>   </p> <br/> 
  <p> Nom : <?=$prenom?> </p> <br/> 
  <p> Mail : <?=$mail?> </p> <br/>
  <p> Date de naissance : <?=$date?> </p> <br/>
  <p> Genre : <?=$genre?> </p> <br/>
  <p> Appellation : <?=$appellation?> </p> <br/>
  

  </div>

<div id="form">
	<form method="POST" action="index.php?page=changeData">
		<label for="prenom">Prénom : </label> <br>
		<input type="text" id="prenom" name="prenom"><br>
		<label for="nom">Nom : </label><br>
		<input type="text" id="nom" name="nom" ><br><br>
		<label for="email">Votre mail : </label> <br>
		<input type="text" id="email" name="mail"><br>
		<label for="birthday">Date d'anniversaire : </label><br>
		<input type="text" id="birthday" name="date" ><br><br>
		<label for="appellation">Appellation : </label><br>
		<input type="text" id="appellation" name="appellation" ><br><br>
		<label for="genre">Genre : </label><br>
		<input type="text" id="genre" name="genre" ><br><br>
		<button type="submit" value="Confirmer">
	</form>
</div>

</body>

<?php
require('footer.php');
?>

</html>