<?php
session_start();

if (isset($_POST['inputcode'])) {
    if ($_POST['inputcode'] == $_SESSION['codeperso']) {
        header('Location: index.php?page=menu_piloteAll');
        exit();
    }

    else {
        echo "<script type='text/javascript'> alert('Code incorrect.</br>Vous allez être redirigé pour retenter de vous connecter.')";
        header('Location: index.php?page=connexionAll');
        exit();
    }
}

else {
    echo "<script type='text/javascript'> alert('Il semle vous n'ayez pas rentrer de code.')";
        header('Location: index.php?page=homeAll');
        exit();
}