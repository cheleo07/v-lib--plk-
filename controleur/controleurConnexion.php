<?php
require_once 'modele/dao/utilisateurDAO.php';
require_once 'modele/dto/utilisateur.php';
require_once 'modele/dao/param.php';

$messageErreurConnexion="Erreur d'authentification";

$formulaireConnexion = new Formulaire('post', 'index.php', 'fConnexion', 'fConnexion');

if(!isset($_SESSION['identification']) || !$_SESSION['identification']){
    $formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerLabelFor('codeacces', "Code d'accès :"), 1);
    $formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerInputTexte('codeacces', 'codeacces', ""   , "", 1,0),1);
    $formulaireConnexion->ajouterComposantTab();
    
    $formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerLabelFor('codesecret', 'Code secret :'), 1);
    $formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerInputMdp('codesecret', 'codesecret', "" ,"",1,0,"",""),1);
    $formulaireConnexion->ajouterComposantTab();
    
    $formulaireConnexion->ajouterComposantLigne($formulaireConnexion-> creerInputSubmit('submitConnex', 'submitConnex', 'Valider'),2);
    $formulaireConnexion->ajouterComposantTab();
    if(isset($_POST['submitConnex'])){
        $utilisateur = new utilisateur($_POST['codeacces'],$_POST['codesecret'],"","","");
        if(isset($_POST['codeacces']))
        {
            $auth = UtilisateurDAO::verification($utilisateur);
        }
        else
        {
            $auth = null;
            $formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerLabel($messageErreurConnexion, "messageErreurConnexion"),2);
            $formulaireConnexion->ajouterComposantTab();
        }
        if($auth!=null)
        {
            
            $_SESSION['codeacces'] = $auth;
            
            if($_SESSION['codeacces'] != null)
            {   

                $_SESSION['vlib']=[];
                $_SESSION['vlib']="accueil";
                header('location: index.php');
                
            }
        }
    }
    
    

    
    

}
else{
    $_SESSION['vlib']=[];
    $_SESSION['vlib']="accueil";
    header('location: index.php');
    
}
$formulaireConnexion->creerFormulaire();
require_once 'vue/vueConnexion.php' ;
require_once 'fonctions/formulaire.php';

?>