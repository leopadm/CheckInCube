<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Evaluations CE1</title>
</head>
<body>
 <section class="quiz">
 	<div class="alerte">N'oublie pas d'écrire ton nom.</div>
	<form action="traitement.php" method="POST" onsubmit=" return checkForm( this )">
	 	<label for="prenom">Prénom : </label><br>
	 	<?php
	 	if(isset) {
	 		echo'<input type="text" id="prenom" name="prenom" value="'.$_COOKIE['prenom'].'">';
	 } else echo '<input type="texr" id="prenom" name="prenom">';
	 	?>
		<br>
	 	<label for="nom">Nom : </label><br>
	 	<?php
	 	if(isset) {
	 		echo'<input type="text" id="nom" name="nom" value="'.$_COOKIE['nom'].'">';
	 } else echo '<input type="texr" id="nom" name="nom">';
	 	?><br><br>
	 	<fieldset>
		 	Dis si les phrases suivantes sont correctes :</br>
		 	<ul>
		 		<li> je suis en CE1 </li>
		 	</ul>
			<input type="radio" id="oui" name="phrase1" value="oui">
			<label for="oui">Oui</label><br>
			<input type="radio" id="non" name="phrase1" value="non">
			<label for="non">Non</label><br>
			<ul>
				
			</ul>
			<input type="radio" id="oui" name="phrase2" value="oui">
			<label for="oui">Oui</label><br>
			<input type="radio" id="non" name="phrase2" value="non">
			<label for="non">Non</label><br>
			<ul>
				
			</ul>
			<input type="radio" id="oui" name="phrase3" value="oui">
			<label for="oui">Oui</label><br>
			<input type="radio" id="non" name="phrase3" value="non">
			<label for="non">Non</label>
		</fieldset>
		<br><br>
		<fieldset>
			 Coche quand la pharse est interrogative :</br>

			 Où est Brian ? <input type="checkbox" name="phrase4" value="check"> <br>
			 Il pleut aujourd'hui. <input type="checkbox" name="phrase5" value="check"> <br>
			 Quelle heure est-il ? <input type="checkbox" name="phrase6" value="check">
		</fieldset>
		<br><br>
		<input id="submit" type="submit" value="Vérifier">
		<input id="reset" type="reset" value="effacer les réponses">
		</form>
 </section>

<script type="text/javascript">
	document.getElementById('reset').onclick = function() {
		alert("Êtes-vous sûr de vouloir réinitialiser vos réponses?");
	};


	
</script>

</body>
</html>