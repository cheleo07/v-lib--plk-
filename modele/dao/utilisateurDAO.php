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
    
}