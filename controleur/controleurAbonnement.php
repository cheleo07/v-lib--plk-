<?php
$formulaireAbonnement = new Formulaire('post', 'index.php', 'fAbonnement', 'fAbonnement');
$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerLabelFor('phrase1',"Pour recevoir votre code d'accès (à 6 chiffres) et votre code secret (à 4 chiffres), merci de remplir au moin l'un
    des 2 champs suivants:"));
$formulaireAbonnement->ajouterComposantTab();

$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerLabelFor('numPortable', "Numero de votre portable :"), 1);
$formulaireAbonnement->ajouterComposantTab();
$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerInputTexte('numPortable', 'numPortable', ""   , 1, "",0),1);
$formulaireAbonnement->ajouterComposantTab();

$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerLabelFor('mail', "Email :"), 1);
$formulaireAbonnement->ajouterComposantTab();
$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerInputTexte('mail', 'mail', ""   , 1, "",0),1);
$formulaireAbonnement->ajouterComposantTab();

$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerLabelFor('choix',"Choix du code secret"));
$formulaireAbonnement->ajouterComposantTab();
$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerLabelFor('phrase2',"Le code secret, que vous aurez choisis, couplé à votre code d'accès vous permettra de vous identifier sur les bornes vélo et sur le site vcub.fr, rubrique mon compte.
"));
$formulaireAbonnement->ajouterComposantTab();

$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerLabelFor('codesecret', 'Code secret (4 chiffres):'), 1);
$formulaireAbonnement->ajouterComposantTab();
$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerInputMdp('codesecret', 'codesecret', "" ,"","",0),1);
$formulaireAbonnement->ajouterComposantTab();

$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerLabelFor('codesecret2', 'Confirmation du code secret:'), 1);
$formulaireAbonnement->ajouterComposantTab();
$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerInputMdp('codesecret2', 'codesecret2', "" ,"","",0),1);
$formulaireAbonnement->ajouterComposantTab();

$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement-> creerInputBack('retourAbo', 'retourAbo', 1, 'Retour'),2);
$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement-> creerInputSubmit('submitAbo', 'submitAbo', 'Continuer'),2);
$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement-> creerInputReset('ResetAbo', 'ResetAbo', 'Annuler'),2);
$formulaireAbonnement->ajouterComposantTab();

$formulaireAbonnement->creerFormulaire();
require_once 'vue/vueAbonnement.php' ;
require_once 'fonctions/formulaire.php';
