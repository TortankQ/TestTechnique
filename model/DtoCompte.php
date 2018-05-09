<?php



class DtoCompte{
    
    #attributes
    private $numCompte;
    private $identifiant;
    private $motDePasse;
    private $admin;

    #constructeur
    public function __construct($identifiant,$motDePasse,$admin){
        $this->identifiant = $identifiant;
        $hash = password_hash($motDePasse,PASSWORD_DEFAULT);
        $this->motDePasse = $hash;
        $this->admin = $admin;
    }
    
    #getters
    public function getNumCompte(){return $this->NumCompt;}
    public function getIdentifiant(){return $this->identifiant;}
    public function getMotDePasse(){return $this->motDePasse;}
    public function getAdmin(){return $this->admin;}
}