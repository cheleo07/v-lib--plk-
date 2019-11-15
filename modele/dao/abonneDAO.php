<?php
class abonneDAO{
    public static function ajouter(abonne $abonne){
        $requetePrepa = DBConnex::getInstance()->prepare("INSERT INTO UTILISATEUR VALUES (:codeacces, :codesecret, :typeutilisateur, :nom, :prenom, :sexe, :datenais, :adresse, :codepost, :ville, :telmob, :telfix, :mail)");
        $requetePrepa->bindParam(":submitPayement", $abonne->getCodeacces());
        $requetePrepa->execute();
        return  $requetePrepa->fetch();   
    }
    
   /* $stmt = $dbh->prepare("INSERT INTO REGISTRY (name, value) VALUES (:name, :value)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':value', $value);
    
    // insertion d'une ligne
    $name = 'one';
    $value = 1;
    $stmt->execute();*/
    
}