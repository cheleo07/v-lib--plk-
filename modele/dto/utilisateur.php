<?php
class utilisateur{
   protected  $codeacces;
   protected  $codesecret;
   protected static $dernierCodeAcces=1111;
   protected static $dernierCodeSecret=1111;
   protected $typeutilisateur;
   protected $nom;
   protected $prenom;
   protected $sexe;
   protected $datenais;
   protected $adresse;
   protected $codepost;
   protected $ville;
   protected $telmob;
   protected $telfix;
   protected $mail;
   
   public function __construct($typeutilisateur, $nom, $prenom, $sexe, $datenais, $adresse, $codepost, $ville, $telmob, $telfix, $mail){
        if($_POST['submitAbo2'] or $_POST['submitAbo']){
            $_SESSION['dernierCodeAcces']++;
            $_SESSION['dernierCodeSecret']++;
        }
        static::$dernierCodeAcces=$_SESSION['dernierCodeAcces'];
        static::$dernierCodeSecret=$_SESSION['dernierCodeSecret'];
       $this->codeacces=static::$dernierCodeAcces;
       $this->codesecret=static::$dernierCodeSecret;
       $this->typeutilisateur=$typeutilisateur;
       $this->nom=$nom;
       $this->prenom=$prenom;
       $this->sexe=$sexe;
       $this->datenais=$datenais;
       $this->adresse=$adresse;
       $this->codepost=$codepost;
       $this->ville=$ville;
       $this->telmob=$telmob;
       $this->telfix=$telfix;
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
    public function getdatenais()
    {
        return $this->datenais;
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
    public function getcodepost()
    {
        return $this->codepost;
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
    public function gettelmob()
    {
        return $this->telmob;
    }

/**
     * @return mixed
     */
    public function gettelfix()
    {
        return $this->telfix;
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
     * @param mixed $datenais
     */
    public function setdatenais($datenais)
    {
        $this->datenais = $datenais;
    }

/**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

/**
     * @param mixed $codepost
     */
    public function setcodepost($codepost)
    {
        $this->codepost = $codepost;
    }

/**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

/**
     * @param mixed $telmob
     */
    public function settelmob($telmob)
    {
        $this->telmob = $telmob;
    }

/**
     * @param mixed $telfix
     */
    public function settelfix($telfix)
    {
        $this->telfix = $telfix;
    }

/**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

}