<?php

function priseRDV()
{
    //ouverture d'une connexion à la bdd

    $objetPdo = new PDO('mysql:host=localhost;dbname=rdv','root','root');

    //préparation de la requête d'insertion (SQL)
    $pdoStat = $objetPdo-> prepare('INSERT INTO contact VALUES(NULL,:nom,:prenom,:heure,:mail,:date)');

    //on lie chaque marqueur à une valeur
    $pdoStat->bindValue(':nom',$_POST['lastName'],PDO::PARAM_STR);
    $pdoStat->bindValue(':prenom',$_POST['firstName'],PDO::PARAM_STR);
    $pdoStat->bindValue(':heure',$_POST['Heure'],PDO::PARAM_STR);
    $pdoStat->bindValue(':mail',$_POST['mail'],PDO::PARAM_STR);
    $pdoStat->bindValue(':date',$_POST['date'],PDO::PARAM_STR);

    //éxécution de la requête préparée
    $insertIsOk = $pdoStat->execute();
    
    //envoie du mail
    $reception = $_SESSION['mail'];
    $prenom = $_SESSION['prenom'];
    $nom = $_SESSION['nom'];
    $appellation = $_SESSION['appellation'];
    $date = $_POST['date'];
    $heure = $_POST['Heure'];
    $content = "
            <head>
                <div style='font-family:Montserrat,sans-serif; font-weight:800;'>Prise de rendez-vous</div>
            </head>

            <body style='font-family:Montserrat, sans-serif;'>
                <div style='font-weight:500;'></br></br>Bonjour, $appellation $prenom $nom</br></br>Vous avez bien demandé un rendez-vous le $date à $heure </br>Pour plus d'informations concernant le rendez-vous, merci de contacter directement le centre de formation à cette adresse.</br></br>De même, pour une modification d'horaire ou de jour, merci de contacter le centre directement. Veuillez toutefois prévenir le centre en amont du rendez-vous et non pas la veille au jour.</br></div>

                <dic style='font-weight:500'></br></br>Cordialement</div>
            </body>
            ";
    mailing("[CheckInCube] Prise de rendez-vous",$content, $reception, "$appellation $nom $prenom");

    if($insertIsOk){
        $_SESSION['message'] = "Merci davoir choisi CheckInCube, vous recevrez prochainement un mail de confimation.";
    }
    else {
        $_SESSION['message'] ='Echec';
    }
}


?>