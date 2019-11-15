<?php
class abonneDAO {
    public function vencours($codesecret,$codeacces){
        $requetePrepa = DBConnex::getInstance()->prepare("SELECT VENCOURS FROM ABONNE where CODEACCES = :codeacces and  CODESECRET = :codesecret");
        $requetePrepa->bindParam( ":codesecret" , $codesecret);
        $requetePrepa->bindParam( ":codeacces", $codeacces);
        $requetePrepa->execute();
        $bool = $requetePrepa->fetch();
        return $bool[0];
    }
}