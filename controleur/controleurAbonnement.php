<?php
$formulaireAbonnement = new Formulaire('post', 'index.php', 'fAbonnement', 'fAbonnement');
$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerLabelFor('numPortable', "Numero de votre portable :"), 1);
$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerInputTexte('numPortable', 'numPortable', ""   , 1, "",0),1);
$formulaireAbonnement->ajouterComposantTab();

$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerLabelFor('mail', "Email :"), 1);
$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerInputTexte('mail', 'mail', ""   , 1, "",0),1);
$formulaireAbonnement->ajouterComposantTab();

$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerLabelFor('codesecret', 'Code secret (4 chiffres):'), 1);
$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerInputTexte('codesecret', 'codesecret', "" ,1,"",0),1);

$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerLabelFor('codesecret2', 'Confirmation du code secret:'), 1);
$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerInputTexte('codesecret2', 'codesecret2', "" ,1,"",0),1);
$formulaireAbonnement->ajouterComposantTab();

$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement-> creerInputSubmit('submitConnex', 'submitConnex', 'Valider'),2);
$formulaireAbonnement->ajouterComposantTab();

$formulaireAbonnement->creerFormulaire();
require_once 'vue/vueAbonnement.php' ;
require_once 'fonctions/formulaire.php';
