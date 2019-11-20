<?php
class abonne extends utilisateur{
   static $codeacces;
   static $codesecret;
   static $dernierCodeAcces=1111;
   static $dernierCodeSecret=1111;
   static $codea=0;
   static $dernierCodeA=1111;
   private $datedebabon;
   private $datefinabon;
   private $credittemps;
   private $montantadebiter;
   private $vencours;


}
   public function __construct($codeacces= NULL,$codesecret= NULL, $codea= NULL, $datedebabon= NULL, $datefinabon= NULL, $credittemps= NULL, $montantadebiter= NULL, $vencours= NULL){
       parent::__construct($typeutilisateur, $nom, $prenom, $sexe, $datenais, $adresse, $codepost, $ville, $telmob, $telfix, $mail);
        if($_POST['submitAbo2'] or $_POST['submitAbo']){
            $_SESSION['dernierCodeAcces']++;
            $_SESSION['dernierCodeSecret']++;
            $_SESSION['dernierCodeA']++;
        }
       static::$dernierCodeAcces=$_SESSION['dernierCodeAcces'];
       static::$dernierCodeSecret=$_SESSION['dernierCodeSecret'];
       static::$dernierCodeA=$_SESSION['dernierCodeA'];
       $this->codeacces=static::$dernierCodeAcces;
       $this->codesecret=static::$dernierCodeSecret;
       $this->codea=static::$dernierCodeA;
       $this->datedebabon=$datedebabon;
       $this->datefinabon=$datefinabon;
       $this->credittemps=$credittemps;
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
    public function getcredittemps()
    {
        return $this->credittemps;
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
     * @param mixed $credittemps
     */
    public function setcredittemps($credittemps)
    {
        $this->credittemps = $credittemps;
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