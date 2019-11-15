<?php
require_once 'traits/hydrate.php';
class plotDAO{
    public function lesplots($station){
        $result = [];
        $requetePrepa = DBConnex::getInstance()->prepare("select * from PLOT WHERE ETAT ='libre' AND NUMS =:nums");
        $requetePrepa->bindParam( ":nums" , $station);
        $requetePrepa->execute();
        $liste = $requetePrepa->fetchAll(PDO::FETCH_ASSOC);
        
        if(!empty($liste)){
            foreach($liste as $plot){
                $unPlot = new plot();
                $unPlot->hydrate($plot);
                $result[] = $unPlot;
            }
        }
        return $result;
    }
}