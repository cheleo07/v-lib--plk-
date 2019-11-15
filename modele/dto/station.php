<?php
class station{
    private $nums;
    private $etats;
    private $noms;
    private $capacites;
    use hydrate;
    
    
    public function __construct($numstation = NULL,$etats = NULL,$nom = NULL,$capacite = NULL){
        $this->capacites=$capacite;
        $this->etats=$etats;
        $this->noms=$nom;
        $this->nums=$numstation;
    }

    public function getNums()
    {
        return $this->nums;
    }

 
    public function getEtats()
    {
        return $this->etats;
    }

    public function getNoms()
    {
        return $this->noms;
    }

    public function getCapacites()
    {
        return $this->capacites;
    }

    public function setNums($nums)
    {
        $this->nums = $nums;
    }

    public function setEtats($etats)
    {
        $this->etats = $etats;
    }

    public function setNoms($noms)
    {
        $this->noms = $noms;
    }

    public function setCapacites($capacites)
    {
        $this->capacites = $capacites;
    }


    

    
    
}