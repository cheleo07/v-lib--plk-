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
$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerInputMail('mail', 'mail', ""   , 1, "",0),1);
$formulaireAbonnement->ajouterComposantTab();

$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerLabelFor('choix',"Choix du code secret"));
$formulaireAbonnement->ajouterComposantTab();
$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerLabelFor('phrase2',"Le code secret, que vous aurez choisis, couplé à votre code d'accès vous permettra de vous identifier sur les bornes vélo et sur le site vcub.fr, rubrique mon compte.
"));
$formulaireAbonnement->ajouterComposantTab();

$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerLabelFor('codesecret', 'Code secret (4 chiffres):'), 1);
$formulaireAbonnement->ajouterComposantTab();
$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerInputMdp('codesecret', 'codesecret', "" ,"","",4,4),1);
$formulaireAbonnement->ajouterComposantTab();

$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerLabelFor('codesecret2', 'Confirmation du code secret:'), 1);
$formulaireAbonnement->ajouterComposantTab();
$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerInputMdp('codesecret2', 'codesecret2', "" ,"","",4,4),1);
$formulaireAbonnement->ajouterComposantTab();

$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement-> creerInputBack('retourAbo', 'retourAbo', 1, 'Retour'),2);
$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement-> creerInputSubmit('submitAbo', 'submitAbo', 'Continuer'),2);
$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement-> creerInputReset('ResetAbo', 'ResetAbo', 'Annuler'),2);
$formulaireAbonnement->ajouterComposantTab();

$formulaireAbonnement->creerFormulaire();

$formulairePayement = new Formulaire('post', 'index.php', 'fPayement', 'fPayement');
$formulairePayement->ajouterComposantLigne($formulairePayement->creerLabelFor('idCommerce', 'Id commerçant '));
$formulairePayement->ajouterComposantLigne($formulairePayement->creerLabelFor('idCommerce', '05347519603679 '));
$formulairePayement->ajouterComposantTab();

$formulairePayement->ajouterComposantLigne($formulairePayement->creerLabelFor('refTrans', 'Reference de la transaction '));
$formulairePayement->ajouterComposantLigne($formulairePayement->creerLabelFor('refTrans', '531473 '));
$formulairePayement->ajouterComposantTab();

$formulairePayement->ajouterComposantLigne($formulairePayement->creerLabelFor('montTrans', 'Montant de la transaction '));
$formulairePayement->ajouterComposantLigne($formulairePayement->creerLabelFor('montTrans', '200€ '));
$formulairePayement->ajouterComposantTab();

$formulairePayement->ajouterComposantLigne($formulairePayement->creerLabelFor('phraseSecure', 'Les symboles '));
$formulairePayement->ajouterComposantLigne($formulairePayement->creerImage('cad1', 'images/lock.png'));
$formulairePayement->ajouterComposantLigne($formulairePayement->creerLabelFor('phraseSecure2', 'indiquent que votre transaction est sécurisée, vous pouvez remplir votre formulaire en toute confiance. '));
$formulairePayement->ajouterComposantTab();

$formulairePayement->ajouterComposantLigne($formulairePayement->creerLabelFor('numCarte', 'Numero de carte: '));
$formulairePayement->ajouterComposantLigne($formulairePayement->creerInputTexte('numCarte', 'numCarte', "", 1, "",0),1);
$formulairePayement->ajouterComposantLigne($formulairePayement->creerLabelFor('expire', 'Expire fin: '));
$formulairePayement->ajouterComposantLigne($formulairePayement->creerInputDate('expire', 'expire','18-01','25-12'),1);
$formulairePayement->ajouterComposantTab();

$formulairePayement->ajouterComposantLigne($formulairePayement->creerLabelFor('controle', 'Numéro de controle au dos de la carte: '));
$formulairePayement->ajouterComposantLigne($formulairePayement->creerInputTexte('controle', 'controle', "", 1, "",0),1);
$formulairePayement->ajouterComposantTab();

$formulairePayement->ajouterComposantLigne($formulaireAbonnement-> creerInputPopup('submitPayement', 'submitPayement', 1, 'Valider'),2);
$formulairePayement->ajouterComposantTab();

$formulairePayement->creerFormulaire();

require_once 'vue/vueAbonnement.php' ;
require_once 'fonctions/formulaire.php';
require_once 'fonctions/menu.php';
