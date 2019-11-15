<?php
class abonneDAO{
    public static function ajouter(abonne $abonne){
        $requetePrepa = DBConnex::getInstance()->prepare("INSERT INTO ABONNE VALUES (NULL, NULL, :codea, :datedebabon, :datefinabon, :credittemps, :montantdebiter, :vencours)");
        $unCodeA = $abonne->getCodeabonnement();
        $uneDateAbo = $abonne->getDatedebutabonnement();
        $uneDateFin = $abonne->getDatefinabonnement();
        $unCredit = $abonne->getCrédittemps();
        $unMontant = $abonne->getMontantadebiter();
        $unVencours = $abonne->getVencours();
        $requetePrepa->bindParam( ":codea", $unCodeA);
        $requetePrepa->bindParam( ":datedebabon", $uneDateAbo);
        $requetePrepa->bindParam( ":datefinabon", $uneDateFin);
        $requetePrepa->bindParam( ":credittemps", $unCredit);
        $requetePrepa->bindParam( ":montantdebiter", $unMontant);
        $requetePrepa->bindParam( ":vencours", $unVencours);
        return  $requetePrepa->execute();   
    } 
}