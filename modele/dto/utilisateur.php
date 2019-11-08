<?php
class abonne{
   private $codeacces;
   private $codesecret;
   protected $typeutilisateur;
   protected $nom;
   protected $prenom;
   protected $sexe;
   protected $datedenaissance;
   protected $adresse;
   protected $codepostal;
   protected $ville;
   protected $telmobile;
   protected $telfixe;
   protected $mail;
   
   public function __construct($codeacces,$codesecret, $typeutilisateur, $nom, $prenom, $sexe, $datedenaissance, $adresse, $codepostal, $ville, $telmobile, $telfixe, $mail){
       $this->codeacces=$codeacces;
       $this->codesecret=$codesecret;
       $this->typeutilisateur=$typeutilisateur;
       $this->nom=$nom;
       $this->prenom=$prenom;
       $this->sexe=$sexe;
       $this->datedenaissance=$datedenaissance;
       $this->adresse=$adresse;
       $this->codepostal=$codepostal;
       $this->ville=$ville;
       $this->telmobile=$telmobile;
       $this->telfixe=$telfixe;
       $this->mail=$mail;
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
    public function getTypeutilisateur()
    {
        return $this->typeutilisateur;
    }

/**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

/**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

/**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

/**
     * @return mixed
     */
    public function getDatedenaissance()
    {
        return $this->datedenaissance;
    }

/**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

/**
     * @return mixed
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

/**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

/**
     * @return mixed
     */
    public function getTelmobile()
    {
        return $this->telmobile;
    }

/**
     * @return mixed
     */
    public function getTelfixe()
    {
        return $this->telfixe;
    }

/**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
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
     * @param mixed $typeutilisateur
     */
    public function setTypeutilisateur($typeutilisateur)
    {
        $this->typeutilisateur = $typeutilisateur;
    }

/**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

/**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

/**
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

/**
     * @param mixed $datedenaissance
     */
    public function setDatedenaissance($datedenaissance)
    {
        $this->datedenaissance = $datedenaissance;
    }

/**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

/**
     * @param mixed $codepostal
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;
    }

/**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

/**
     * @param mixed $telmobile
     */
    public function setTelmobile($telmobile)
    {
        $this->telmobile = $telmobile;
    }

/**
     * @param mixed $telfixe
     */
    public function setTelfixe($telfixe)
    {
        $this->telfixe = $telfixe;
    }

/**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

}