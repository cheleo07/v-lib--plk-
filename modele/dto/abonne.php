<?php
class abonne extends utilisateur{
   private $codeacces;
   private $codesecret;
   private $codea;
   private $datedebabon;
   private $datefinabon;
   private $cr�dittemps;
   private $montantadebiter;
   private $vencours;
   
   public function __construct($codeacces= NULL,$codesecret= NULL, $codea= NULL, $datedebabon= NULL, $datefinabon= NULL, $cr�dittemps= NULL, $montantadebiter= NULL, $vencours= NULL){
       parent::__construct($typeutilisateur, $nom, $prenom, $sexe, $datenais, $adresse, $codepost, $ville, $telmob, $telfix, $mail);
       $this->codeacces=$codeacces;
       $this->codesecret=$codesecret;
       $this->codea=$codea;
       $this->datedebabon=$datedebabon;
       $this->datefinabon=$datefinabon;
       $this->cr�dittemps=$cr�dittemps;
       $this->montantadebiter=$montantadebiter;
       $this->vencours=$vencours;
   }
/**
     * @return mixed
     */
    public function getCodeacces()
    {
        return $this->codeacces;
    }

/**
     * @return mixed
     */
    public function getCodesecret()
    {
        return $this->codesecret;
    }

/**
     * @return mixed
     */
    public function getcodea()
    {
        return $this->codea;
    }

/**
     * @return mixed
     */
    public function getdatedebabon()
    {
        return $this->datedebabon;
    }

/**
     * @return mixed
     */
    public function getdatefinabon()
    {
        return $this->datefinabon;
    }

/**
     * @return mixed
     */
    public function getCr�dittemps()
    {
        return $this->cr�dittemps;
    }

/**
     * @return mixed
     */
    public function getMontantadebiter()
    {
        return $this->montantadebiter;
    }

/**
     * @return mixed
     */
    public function getVencours()
    {
        return $this->vencours;
    }

/**
     * @param mixed $codeacces
     */
    public function setCodeacces($codeacces)
    {
        $this->codeacces = $codeacces;
    }

/**
     * @param mixed $codesecret
     */
    public function setCodesecret($codesecret)
    {
        $this->codesecret = $codesecret;
    }

/**
     * @param mixed $codea
     */
    public function setcodea($codea)
    {
        $this->codea = $codea;
    }

/**
     * @param mixed $datedebabon
     */
    public function setdatedebabon($datedebabon)
    {
        $this->datedebabon = $datedebabon;
    }

/**
     * @param mixed $datefinabon
     */
    public function setdatefinabon($datefinabon)
    {
        $this->datefinabon = $datefinabon;
    }

/**
     * @param mixed $cr�dittemps
     */
    public function setCr�dittemps($cr�dittemps)
    {
        $this->cr�dittemps = $cr�dittemps;
    }

/**
     * @param mixed $montantadebiter
     */
    public function setMontantadebiter($montantadebiter)
    {
        $this->montantadebiter = $montantadebiter;
    }

/**
     * @param mixed $vencours
     */
    public function setVencours($vencours)
    {
        $this->vencours = $vencours;
    }

}