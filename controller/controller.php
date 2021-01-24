<?php

session_start();

function home()
{
    require('view/viewHomeFr.php');
}

function homeAll()
{
    require('view/viewHomeAll.php');
}

function homeEsp()
{
    require('view/viewHomeEsp.php');
}

function error404()
{
    require('view/viewError404.php');
}

function choixCategorieFr()
{
    require('view/view_choix_categoriesFr.php');
}

function choixCategorieAng()
{
    require('view/view_choix_categorieAng.php');
}

function inscription_entrepriseFr()
{
    require('view/view_inscription_entreprise.php');
}

function inscription_piloteFr()
{
    require('view/view_inscriptionPiloteFr.php');
}

function menu_centreFr()
{
    require('view/view_menu_centre.php');
}

function menu_centreAng()
{
    require('view/view_menu_centre_Ang.php');
}

function menu_centreAll()
{
    require('view/view_menu_centre_All.php');
}

function menu_piloteFr()
{
    require('view/view_menupilote.php');
}

function menu_piloteAng()
{
    require('view/view_menpiloteAng.php');
}

function menu_piloteAll()
{
    require('view/view_menupiloteAll.php');
}

function connexionAll()
{
    require('view/viewConnexionAll.php');
}

function connexionAng()
{
    require('view/viewConnexionAng.php');
}

function connexionEsp()
{
    require('view/viewConnexionEsp.php');
}

function connexionFr()
{
    require('view/viewPageConnexion.php');
}

function categorieConnexionFr()
{
    require('view/categorieConnexion.php');
}

function writeValuesFr()
{
    require('model/writeValuesFr.php');
}

function writeValuesAng()
{
    require('model/writeValuesAng.php');
}

function confirmAccountFr()
{
    require('model/confirmaccountFr.php');
}

function confirmAccountAng()
{
require('model/confirmaccountAng.php');
}

function compareValuesFr()
{
    require('model/compareValues.php');
}

function compareValuesAng()
{
    require('model/compareValuesAng.php');
}

function compareValuesEsp()
{
    require('model/compareValuesEsp.php');
}

function compareValuesAll()
{
    require('model/compareValuesesp.php');
}

function verifymail1()
{
    require('model/verifymail1.php');
}

function verifymail2()
{
    require('model/verifymail2.php');
}

function verifymail1Ang()
{
    require('model/verifymail1Ang.php');
}

function verifymail2Ang()
{
    require('model/verifymail2Ang.php');
}

function compte()
{
    require('view/viewCompte.php');
}

function compteAll()
{
    require('view/viewCompte.php');
}

function compteAng()
{
    require('view/viewCompteAll.php');
}

function centre()
{
    require('view/viewcentre.php');
}

function centreAll()
{
    require('view/viewcentreAll.php');
}

function centreAng()
{
    require('view/viewcentreAng.php');
}





?>