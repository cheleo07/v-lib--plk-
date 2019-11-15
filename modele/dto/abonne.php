<?php
class abonne{
    private $codeacces;
    private $codesecret;
    private $nom;
    private $prenom;
    private $typeutilisateur;
    private $Vencours;
    
    public function __construct($codeacces,$codesecret,$nom = NULL,$prenom = NULL,$typeutilisateur = NULL){
        $this->codeacces=$codeacces;
        $this->codesecret=$codesecret;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->typeutilisateur=$typeutilisateur;
        $this->Vencours=0;
    }

    public function getCodeacces()
    {
        return $this->codeacces;
    }

    public function getCodesecret()
    {
        return $this->codesecret;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getTypeutilisateur()
    {
        return $this->typeutilisateur;
    }

    public function getVencours()
    {
        return $this->Vencours;
    }


    public function setCodeacces($codeacces)
    {
        $this->codeacces = $codeacces;
    }


    public function setCodesecret($codesecret)
    {
        $this->codesecret = $codesecret;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }


    public function setTypeutilisateur($typeutilisateur)
    {
        $this->typeutilisateur = $typeutilisateur;
    }

    public function setVencours($Vencours)
    {
        $this->Vencours = $Vencours;
    }

    
}