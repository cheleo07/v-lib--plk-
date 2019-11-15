<?php
require_once 'traits/hydrate.php';
class stationDAO{
    public function lesstations(){
        $result = [];
        $requetePrepa = DBConnex::getInstance()->prepare("select * from STATION" );
            
        $requetePrepa->execute();
        $liste = $requetePrepa->fetchAll(PDO::FETCH_ASSOC);
            
        if(!empty($liste)){
            foreach($liste as $station){
                $uneStation = new station();
                $uneStation->hydrate($station);
                $result[] = $uneStation;
            }
        }
        return $result;
    }
   
}
