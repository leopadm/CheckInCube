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

        case 'recherche2':
            recherche2();
            break;

        case 'viewCGU':
            viewCGU();
            break;

        case 'viewGraph':
            viewGraph();
            break;

        case 'disconnect':
            disconnect();
            break;

        case 'disconnectAng':
            disconnectAng();
            break;
        
        case 'disconnectEsp':
            disconnectEsp();
            break;

        case 'disconnectAll':
            disconnectAll();
            break;

        case 'contact':
            contact();
            break;

        case 'apropos':
            apropos();
            break;
        
        case 'connexionAdmin':
            connexionAdmin();
            break;

        case 'viewAdmin':
            viewAdmin();
            break;

        case 'compareAdmin':
            compareAdmin();
            break;

        case 'view_FAQ':
            view_FAQ();
            break;
    
        case 'faq_reponse1':
            faq_reponse1();
            break;

        case 'faq_reponse2':
            faq_reponse2();
            break;

        case 'faq_reponse3':
            faq_reponse3();
            break;

        case 'faq_reponse4':
            faq_reponse4();
            break;

        case 'faq_reponse5':
            faq_reponse5();
            break;

        case 'faq_reponse6':
            faq_reponse6();
            break;

        case 'faq_reponse7':
            faq_reponse7();
            break;

        case 'viewCompte':
            viewCompte();
            break;
    }
}
?>