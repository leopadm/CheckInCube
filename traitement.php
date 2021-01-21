<?php

$phrase1 = $_POST['phrase1'];
$phrase2 = $_POST['phrase2'];
$phrase3 = $_POST['phrase3'];
$phrase4 = $_POST['phrase4'];
$phrase6 = $_POST['phrase6'];

$score = 0;


if ($phrase1 == 'non') {
	$score = $score + 1;
};


if ($phrase2 == 'non') {
	$score = $score + 1;
};


if ($phrase3 == 'oui') {
	$score = $score + 1;
};


if ($phrase4 == 'check') {
	$score = $score + 1;
};


if (!isset($_POST['phrase5'])) {
	$score = $score + 1;
}


if ($phrase6 == 'check') {
	$score = $score + 1;
};


if ($score < 6) {
	header('Location: eval.php');
	exit();
}


if($score == 6){
	header('Location: bravo.php');
	exit();
}

setcookie('prenom', $_POST['prenom']);
setcookie('nom', $_POST['nom']);

?>