<?php

require_once 'fonctions/menu.php';
require_once 'fonctions/formulaire.php';
require_once 'fonctions/dispatcher.php';

if(isset($_GET['vlib'])){
    $_SESSION['vlib']= $_GET['vlib'];
}
else
{
    if(!isset($_SESSION['vlib'])){
        $_SESSION['vlib']="accueil";
    }
}

$vlib = new Menu("vlib");

$vlib->ajouterComposant($vlib->creerItemLien("accueil", "Accueil"));
$vlib->ajouterComposant($vlib->creerItemLien("abonnement", "Abonnement"));
$vlib->ajouterComposant($vlib->creerItemLien("maintenance", "Maintenance/Liste Stations"));

$vlib->ajouterComposant($vlib->creerItemLien("emprunt", "Emprunt/Retour"));
$vlib->ajouterComposant($vlib->creerItemLien("connexion", "Se connecter"));

$menuPrincipal = $vlib->creerMenu( $_SESSION['vlib'],'vlib');


include_once dispatcher::dispatch( $_SESSION['vlib']);




 