<?php
class abonneDAO{
    public static function ajouter(abonne $abonne){
        $requetePrepa = DBConnex::getInstance()->prepare("INSERT INTO ABONNE VALUES (:codeacces, :codesecret, :codea, :datedebabon, :datefinabon, :credittemps, :montantdebiter, :vencours)");
        $unCodeAcces = 1;
        $unCodeSecret = 1;
        $unCodeA = $abonne->getcodea();
        $uneDateAbo = $abonne->getdatedebabon();
        $uneDateFin = $abonne->getdatefinabon();
        $unCredit = $abonne->getcredittemps();
        $unMontant = $abonne->getMontantadebiter();
        $unVencours = $abonne->getVencours();
        $requetePrepa->bindParam( ":codeacces", $unCodeAcces);
        $requetePrepa->bindParam( ":codesecret", $unCodeSecret);
        $requetePrepa->bindParam( ":codea", $unCodeA);
        $requetePrepa->bindParam( ":datedebabon", $uneDateAbo);
        $requetePrepa->bindParam( ":datefinabon", $uneDateFin);
        $requetePrepa->bindParam( ":credittemps", $unCredit);
        $requetePrepa->bindParam( ":montantdebiter", $unMontant);
        $requetePrepa->bindParam( ":vencours", $unVencours);
        return  $requetePrepa->execute();   
    } 
}