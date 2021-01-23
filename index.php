<?php

require ('controller/controller.php');

if (!isset($_GET['page']) || empty($_GET['page']))
{
	home();
}
else
{
    $page = htmlspecialchars($_GET['page']);
    switch ($page)
    {
        default:
            error404();
            break;

		case 'home':
			home();
            break;

        case 'homeAll':
            HomeAll();
            break;
        
        case 'homeEsp':
            HomeEsp();
            break;
        
        case 'homeAng':
            HomeAng();
            break;

        case 'choixCategorieFr':
            choixCategorieFr();
            break;
        
        case 'choixCategorieAng':
            choixCategorieAng();
            break;

        case 'inscription_entrepriseFr':
            inscription_entrepriseFr();
            break;

        case 'inscription_piloteFr':
            inscription_piloteFr();
            break;
        
        case 'menu_centreFr':
            menu_centreFr();
            break;
        
        case 'menu_piloteFr':
            menu_piloteFr();
            break;

        case 'menu_piloteAng':
            menu_piloteAng();
            break;

        case 'connexionAll':
            connexionAll();
            break;

        case 'connexionEsp':
            connexionEsp();
            break;

        case 'connexionFR':
            connexionFr();
            break;

        case 'categorieConnexion':
            choixCategorieFr();
            break;

        case 'writeValuesFr':
            writeValuesFr();
            break;

        case 'writeValuesAng':
            writeValuesAng();
            break;

        case 'confirmAccountFr':
            confirmaccountFr();
            break;

        case 'confirmAccountAng':
            confirmAccountAng();
            break;

        case 'compareValuesFr':
            compareValuesFr();
            break;

        case 'compareValuesAng':
            compareValuesAng();
            break;

        case 'compareValuesEsp':
            compareValuesEsp();
            break;

        case 'compareValuesAll':
            compareValuesAll();
            break;

        case 'verifymail1':
            verifymail1();
            break;
        
        case 'verifymail2':
            verifymail2();
            break;

        case 'verifymail1Ang':
            verifymail1Ang();
            break;

        case 'verifymail2Ang':
            verifymail2Ang();
            break;

        
        



    }
}



?>