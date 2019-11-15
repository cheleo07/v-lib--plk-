<?php
class plot{
    private $nump;
    private $etat;
    private $nums;
    private $numv;
    use hydrate;
    
    public function __construct($nump=NULL,$etat=NULL,$nums=NULL,$numv=NULL){
        $this->nump=$nump;
        $this->etat=$etat;
        $this->nums=$nums;
        $this->numv=$numv;
    }

    public function getNump()
    {
        return $this->nump;
    }

    public function getEtat()
    {
        return $this->etat;
    }

    public function getNums()
    {
        return $this->nums;
    }

    public function getNumv()
    {
        return $this->numv;
    }

    public function setNump($nump)
    {
        $this->nump = $nump;
    }

    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    public function setNums($nums)
    {
        $this->nums = $nums;
    }

    public function setNumv($numv)
    {
        $this->numv = $numv;
    }

    
    
}