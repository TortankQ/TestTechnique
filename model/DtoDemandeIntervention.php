<?php

               
class DtoDemandeIntervention{
    
    #attributes
    private $idIntervention;
    private $nomUtilisateur;
    private $bureau;
    private $probleme;
    private $pannePoste;
    private $description;
    private $statut;
    
    #constructeur
    public function __construct($nomUtilisateur,$bureau,$probleme,$pannePoste,$description,$statut){
        $this->nomUtilisateur = $nomUtilisateur;
        $this->bureau = $bureau;
        $this->probleme = $probleme;
        $this->description = $description;
        $this->statut = $statut;
        
        if(isset($pannePoste)){
            $this->pannePoste = $pannePoste;
        }
    }
    
    #getters
    public function getIdIntervention(){return $this->idIntervention;}
    public function getNomUtilisateur(){return $this->nomUtilisateur;}
    public function getBureau(){return $this->bureau;}
    public function getProbleme(){return $this->probleme;}
    public function getPannePoste(){return $this->pannePoste;}
    public function getDescription(){return $this->description;}
    public function getStatut(){return $this->statut;}
    
    public function setIdIntervention($idIntervention){$this->idIntervention=$idIntervention;}
     public function setStatut($idIntervention){$this->statut=$statut;}
    
    
}