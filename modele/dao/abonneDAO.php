<?php
class abonneDAO{
    public static function ajouter(abonne $abonne){
        $requetePrepa = DBConnex::getInstance()->prepare("INSERT INTO ABONNE VALUES (3333, 2222, 2, 2019-10-02, 2019-10-05, 10, 123, 0);
                                                          INSERT INTO UTILISATEUR VALUES (3333, 2222, 'abo', 'leo', 'leo', 'M', 2019-10-02, '4rue des lylas', '20000', 'Ajaccio', '0615664489', '0495611674', 'lfg@gmail.com');");
        $requetePrepa->bindParam(":submitPayement", $abonne->getgetCodeacces());
        $requetePrepa->execute();
        return  $requetePrepa->fetch();   
    }
    
}