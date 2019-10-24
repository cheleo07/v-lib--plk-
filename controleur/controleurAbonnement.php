<?php
////formulaire boutons
$formulaireBouton = new Formulaire("post", "", "fBouton", "fBouton");
$formulaireBouton->ajouterComposantLigne($formulaireBouton->creerBouton("d1", "bouton bouton1", "Pass 24H", "1.5€"));
$formulaireBouton->ajouterComposantLigne($formulaireBouton->creerBouton("d2", "bouton bouton2", "Pass 7 Jours", "7€"));
$formulaireBouton->ajouterComposantLigne($formulaireBouton->creerBouton("d3", "bouton bouton3", "Pass Mensuel", "10€"));
$formulaireBouton->ajouterComposantLigne($formulaireBouton->creerBouton("d4", "bouton bouton4", "Pass Annuel", "30€"));
$formulaireBouton->ajouterComposantTab();
$formulaireBouton->creerFormulaire();

//formulaire abonnement 24h/7J
$formulaireAbonnement = new Formulaire('post', 'index.php', 'fAbonnement', 'fAbonnement');
$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerLabelFor('phrase1',"Pour recevoir votre code d'accès (à 6 chiffres) et votre code secret (à 4 chiffres), merci de remplir au moin l'un
    des 2 champs suivants:"));
$formulaireAbonnement->ajouterComposantTab();

$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerLabelFor('numPortable', "Numero de votre portable :"), 1);
$formulaireAbonnement->ajouterComposantTab();
$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerInputTexte('numPortable', 'numPortable', "","", 0,0),1);
$formulaireAbonnement->ajouterComposantTab();

$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerLabelFor('mail', "Email :"), 1);
$formulaireAbonnement->ajouterComposantTab();
$formulaireAbonnement->ajouterComposantLigne($formulaireAbonnement->creerInputMail('mail', 'mail', "" ,0),1);
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
//Formulaire payement 24/7J
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
$formulairePayement->ajouterComposantLigne($formulairePayement->creerInputTexte('numCarte', 'numCarte', "", "", 1,0),1);
$formulairePayement->ajouterComposantLigne($formulairePayement->creerLabelFor('expire', 'Expire fin: '));
$formulairePayement->ajouterComposantLigne($formulairePayement->creerInputDate('expire', 'expire','18-01','25-12'),1);
$formulairePayement->ajouterComposantTab();

$formulairePayement->ajouterComposantLigne($formulairePayement->creerLabelFor('controle', 'Numéro de controle au dos de la carte: '));
$formulairePayement->ajouterComposantLigne($formulairePayement->creerInputTexte('controle', 'controle', "", "", 1,0),1);
$formulairePayement->ajouterComposantTab();

$formulairePayement->ajouterComposantLigne($formulaireAbonnement-> creerInputPopup('submitPayement', 'submitPayement', 1, 'Valider'),2);
$formulairePayement->ajouterComposantLigne($formulaireAbonnement->creerInputSubmitForce('submitAnnul', 'submitAnnul', 1,'Annuler retour au site'));
$formulairePayement->ajouterComposantTab();
$formulairePayement->creerFormulaire();

//Formulaire abonnement M/A
$formulaireAbonnement2 = new Formulaire('post', 'index.php', 'fAbonnement2', 'fAbonnement2');
$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerInputCheckbox('carte', 'carte', "Je dispose d'une carte Tlib"), 1);
$formulaireAbonnement2->ajouterComposantTab();

$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerInputRadio('civil', 'm', 'M.'), 1);
$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerInputRadio('civil', 'mme', 'Mme.'), 1);
$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerInputRadio('civil', 'mlle', 'Mlle.'), 1);
$formulaireAbonnement2->ajouterComposantTab();

$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerLabelFor('nom', "Nom :"), 1);
$formulaireAbonnement2->ajouterComposantTab();
$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerInputTexte('nom', 'nom', "", "", 1,0),1);
$formulaireAbonnement2->ajouterComposantTab();


$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerLabelFor('prenom', "Prénom :"), 1);
$formulaireAbonnement2->ajouterComposantTab();
$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerInputTexte('prenom', 'prenom', "" , "", 1,0),1);
$formulaireAbonnement2->ajouterComposantTab();

$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerLabelFor('date', "Date de naissance :"), 1);
$formulaireAbonnement2->ajouterComposantTab();
$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerInputDate2('date', 'date','1900-01-01','2025-12-01'),1);
$formulaireAbonnement2->ajouterComposantTab();

$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerLabelFor('libelle', "Numéro et libelle de voie :"), 1);
$formulaireAbonnement2->ajouterComposantTab();
$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerInputTexte('libelle', 'libelle', "","", 1,0),1);
$formulaireAbonnement2->ajouterComposantTab();

$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerLabelFor('compl', "Complément destinataire (N° appart,...) :"), 1);
$formulaireAbonnement2->ajouterComposantTab();
$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerInputTexte('compl', 'compl', "", "",1,0),1);
$formulaireAbonnement2->ajouterComposantTab();

$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerLabelFor('complG', "Complément géographique (Entrée,...) :"), 1);
$formulaireAbonnement2->ajouterComposantTab();
$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerInputTexte('complG', 'complG', "" , "",1,0),1);
$formulaireAbonnement2->ajouterComposantTab();

$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerLabelFor('post', "Code postal :"), 1);
$formulaireAbonnement2->ajouterComposantTab();
$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerInputTexte('post', 'post', "", "", 1,0),1);
$formulaireAbonnement2->ajouterComposantTab();

$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerLabelFor('ville', "Ville :"), 1);
$formulaireAbonnement2->ajouterComposantTab();
$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerInputTexte('ville', 'ville', "" , "", 1,0),1);
$formulaireAbonnement2->ajouterComposantTab();

$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerLabelFor('numPortable', "Mobile :"), 1);
$formulaireAbonnement2->ajouterComposantTab();
$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerInputTexte('numPortable', 'numPortable', "", "", 1,0),1);
$formulaireAbonnement2->ajouterComposantTab();

$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerLabelFor('numFixe', "Téléphone Fixe :"), 1);
$formulaireAbonnement2->ajouterComposantTab();
$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerInputTexte('numFixe', 'numFixe', "", "",1,0),1);
$formulaireAbonnement2->ajouterComposantTab();

$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerLabelFor('mail', "Email :"), 1);
$formulaireAbonnement2->ajouterComposantTab();
$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerInputMail('mail', 'mail', "", "",1,0),1);
$formulaireAbonnement2->ajouterComposantTab();

$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerLabelFor('mail', "Confirmation email :"), 1);
$formulaireAbonnement2->ajouterComposantTab();
$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerInputMail('mail', 'mail', "", "",1,0),1);
$formulaireAbonnement2->ajouterComposantTab();

$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerLabelFor('choix',"Choix du code secret"));
$formulaireAbonnement2->ajouterComposantTab();
$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerLabelFor('phrase2',"Choisissez ci-dessous un code secret à 4 chiffres."));
$formulaireAbonnement2->ajouterComposantTab();
$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerLabelFor('phrase2',"Ce code secret vous permettra de vous identifier sur les bornes et vous permettra, avec votre code d'accès, d'accéder a votre compte sur ce site."));
$formulaireAbonnement2->ajouterComposantTab();

$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerLabelFor('codesecret', 'Code secret (4 chiffres):'), 1);
$formulaireAbonnement2->ajouterComposantTab();
$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerInputMdp('codesecret', 'codesecret', "" ,"","",4,4),1);
$formulaireAbonnement2->ajouterComposantTab();

$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerLabelFor('codesecret2', 'Confirmation du code secret:'), 1);
$formulaireAbonnement2->ajouterComposantTab();
$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2->creerInputMdp('codesecret2', 'codesecret2', "" ,"","",4,4),1);
$formulaireAbonnement2->ajouterComposantTab();

$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2-> creerInputBack('retourAbo', 'retourAbo', 1, 'Retour'),2);
$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2-> creerInputSubmit('submitAbo2', 'submitAbo2', 'Continuer'),2);
$formulaireAbonnement2->ajouterComposantLigne($formulaireAbonnement2-> creerInputReset('ResetAbo', 'ResetAbo', 'Annuler'),2);
$formulaireAbonnement2->ajouterComposantTab();

$formulaireAbonnement2->creerFormulaire();

//Formulaire payement M/A
$formulairePayement2 = new Formulaire('post', 'index.php', 'fPayement', 'fPayement');
$formulairePayement2->ajouterComposantLigne($formulairePayement2->creerLabelFor('phraseSecure', 'Les symboles '));
$formulairePayement2->ajouterComposantLigne($formulairePayement2->creerImage('cad1', 'images/lock.png'));
$formulairePayement2->ajouterComposantLigne($formulairePayement2->creerLabelFor('phraseSecure2', 'indiquent que votre transaction est sécurisée, vous pouvez remplir votre formulaire en toute confiance. '));
$formulairePayement2->ajouterComposantTab();

$formulairePayement2->ajouterComposantLigne($formulairePayement2->creerLabelFor('numCarte', 'Numero de carte: '));
$formulairePayement2->ajouterComposantLigne($formulairePayement2->creerInputTexte('numCarte', 'numCarte', "", "", 1,0),1);
$formulairePayement2->ajouterComposantLigne($formulairePayement2->creerLabelFor('expire', 'Expire fin: '));
$formulairePayement2->ajouterComposantLigne($formulairePayement2->creerInputDate('expire', 'expire','18-01','25-12'),1);
$formulairePayement2->ajouterComposantTab();

$formulairePayement2->ajouterComposantLigne($formulairePayement2->creerLabelFor('controle', 'Numéro de controle au dos de la carte: '));
$formulairePayement2->ajouterComposantLigne($formulairePayement2->creerInputTexte('controle', 'controle', "", "", 1,0),1);
$formulairePayement2->ajouterComposantTab();

$formulairePayement2->ajouterComposantLigne($formulairePayement2-> creerInputPopup('submitPayement', 'submitPayement', 1, 'Valider'),2);
$formulairePayement2->ajouterComposantLigne($formulaireAbonnement2->creerInputSubmitForce('submitAnnul', 'submitAnnul', 1,'Annuler retour au site'));
$formulairePayement2->ajouterComposantTab();

$formulairePayement2->creerFormulaire();

require_once 'vue/vueAbonnement.php' ;
require_once 'fonctions/formulaire.php';
require_once 'fonctions/menu.php';
