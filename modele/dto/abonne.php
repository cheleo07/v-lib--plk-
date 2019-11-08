<?php
class abonne extends utilisateur{
   private $codeacces;
   private $codesecret;
   private $codeabonnement;
   private $datedebutabonnement;
   private $datefinabonnement;
   private $cr�dittemps;
   private $montantadebiter;
   private $vencours;
   
   public function __construct($codeacces= NULL,$codesecret= NULL, $codeabonnement= NULL, $datedebutabonnement= NULL, $datefinabonnement= NULL, $cr�dittemps= NULL, $montantadebiter= NULL, $vencours= NULL){
       parent::__construct($typeutilisateur, $nom, $prenom, $sexe, $datedenaissance, $adresse, $codepostal, $ville, $telmobile, $telfixe, $mail);
       $this->codeacces=$codeacces;
       $this->codesecret=$codesecret;
       $this->codeabonnement=$codeabonnement;
       $this->datedebutabonnement=$datedebutabonnement;
       $this->datefinabonnement=$datefinabonnement;
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
    public function getCodeabonnement()
    {
        return $this->codeabonnement;
    }

/**
     * @return mixed
     */
    public function getDatedebutabonnement()
    {
        return $this->datedebutabonnement;
    }

/**
     * @return mixed
     */
    public function getDatefinabonnement()
    {
        return $this->datefinabonnement;
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
     * @param mixed $codeabonnement
     */
    public function setCodeabonnement($codeabonnement)
    {
        $this->codeabonnement = $codeabonnement;
    }

/**
     * @param mixed $datedebutabonnement
     */
    public function setDatedebutabonnement($datedebutabonnement)
    {
        $this->datedebutabonnement = $datedebutabonnement;
    }

/**
     * @param mixed $datefinabonnement
     */
    public function setDatefinabonnement($datefinabonnement)
    {
        $this->datefinabonnement = $datefinabonnement;
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