<?php
class UtilisateurDAO{
    
    public static function verification(utilisateur $utilisateur){
        
        $requetePrepa = DBConnex::getInstance()->prepare("SELECT CODEACCES,NOM,PRENOM,TYPEUTILISATEUR from UTILISATEUR where CODEACCES = :codeacces and  CODESECRET = :codesecret");
        
        $codeacces = $utilisateur->getCodeacces();
        $codesecret = $utilisateur->getCodesecret();
        
        $requetePrepa->bindParam( ":codesecret" , $codesecret);
        
        $requetePrepa->bindParam( ":codeacces", $codeacces);
        
        
        $requetePrepa->execute();
        
        $login = $requetePrepa->fetch();
        return $login;
    }
    
    public static function ajouter(utilisateur $utilisateur){
        $requetePrepa = DBConnex::getInstance()->prepare("INSERT INTO UTILISATEUR VALUES (NULL, NULL, NULL, :nom, :prenom, :sexe, :datenais, :adresse, :codepost, :ville, :telmob, :telfix, :mail);");
        $unNom = $utilisateur->getNom();
        $unPrenom = $utilisateur->getPrenom();
        $unSexe = $utilisateur->getSexe();
        $uneDate = $utilisateur->getDatedenaissance();
        $uneAdresse = $utilisateur->getAdresse();
        $unCodePost = $utilisateur->getCodepostal();
        $uneVille = $utilisateur->getVille();
        $unTelMob = $utilisateur->getTelmobile();
        $unTelFix = $utilisateur->getTelfixe();
        $unMail = $utilisateur->getMail();
        $requetePrepa->bindParam( ":nom", $unNom);
        $requetePrepa->bindParam( ":prenom", $unPrenom);
        $requetePrepa->bindParam( ":sexe", $unSexe);
        $requetePrepa->bindParam( ":datenais", $uneDate);
        $requetePrepa->bindParam( ":adresse", $uneAdresse);
        $requetePrepa->bindParam( ":codepost", $unCodePost);
        $requetePrepa->bindParam( ":ville", $uneVille);
        $requetePrepa->bindParam( ":telmob", $unTelMob);
        $requetePrepa->bindParam( ":telfix", $unTelFix);
        $requetePrepa->bindParam( ":mail", $unMail);
        return  $requetePrepa->execute();
    }
}