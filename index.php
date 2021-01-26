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

        case 'inscription_CF':
            inscription_CF();
            break;
        
        case 'inscription_CR':
            inscription_CR();
            break;

        case 'inscription_piloteFr':
            inscription_piloteFr();
            break;
        
        case 'menu_centreFr':
            menu_centreFr();
            break;

        case 'menu_centreAng':
            menu_centreAng();
            break;

        case 'menu_centreAll':
            menu_centreAll();
            break;
        
        case 'menu_piloteFr':
            menu_piloteFr();
            break;

        case 'menu_piloteAng':
            menu_piloteAng();
            break;

        case 'menu_piloteAll':
            menu_piloteAll();
            break;

        case 'connexionAll':
            connexionAll();
            break;

        case 'connexionEsp':
            connexionEsp();
            break;

        case 'connexionAng':
            connexionAng();
            break;

        case 'connexionFr':
            connexionFr();
            break;

        case 'categorieConnexion':
            categorieConnexionFr();
            break;

        case 'writeValuesFr':
            writeValuesFr();
            break;

        case 'writeValuesAng':
            writeValuesAng();
            break;

        case 'confirmaccountFr':
            confirmAccountFr();
            break;

        case 'confirmAccountAng':
            confirmAccountAng();
            break;

        case 'confirmaccountCF':
            confirmaccountCF();
            break;

        case 'confirmaccountCR':
            confirmaccountCR();
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

        case 'verifymail1All':
            verifymail1All();
            break;

        case 'verifymail2All':
            verifymail2All();
            break;

        case 'verifymail1Esp':
            verifymail1Esp();
            break;

        case 'verifymail2Esp':
            verifymail2Esp();
            break;

        case 'compte':
            compte();
            break;

        case 'compteAll':
            compteAll();
            break;

        case 'compteAng':
            compteAng();
            break;

        case 'centre':
            centre();
            break;

        case 'centreAll':
            centreAll();
            break;

        case 'centreAng':
            centreAng();
            break;

        case 'rdv':
            rdv();
            break;

        case 'rdvForm':
            rdvForm();
            break;
        
        case 'writeValuesCF':
            writeValuesCF();
            break;

        case 'writeValuesCR':
            writeValuesCR();
            break;

        case 'recherche':
            recherche();
            break;

        case'recherche2':
            recherche2();
            break;

    }
}
?>