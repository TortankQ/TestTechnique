<?php

/**
 * 
 * @author Tayfun Ozturk
 */

class DaoCompte{
    
    #attributs
    private $bdd;
    private $hote;
    private $utilisateurBDD;
    private $motDePasseBDD;
    
    #constructeur
    public function __construct($hote,$bdd,$utilisateurBDD, $motDePasseBDD){
        try{
            $this->bdd = new PDO('mysql:host='.$hote.';dbname='.$bdd.';charset=utf8',$utilisateurBDD,$motDePasseBDD);
            $this->hote = $hote;
            $this->utilisateurBDD = $utilisateurBDD;
            $this->motDePasseBDD = $motDePasseBDD;
        }catch (Exception $e){
            die ('Erreur :'.$e->getMessage());
        }
    }
    
   
    public function insertCompte($compte){
        
        $requete = 'INSERT INTO Compte(Identifiant, MotDePasse, Admin) VALUES(:t_identifiant,:t_motdepasse,:t_admin);';
        $requete = $this->bdd->prepare($requete);
        
        $requete->execute(array(
            't_identifiant' => $compte->getIdentifiant(),
            't_motdepasse' => $compte->getMotdepasse(),
            't_admin' => $compte->getAdmin()
        ));
        
        return true;
    }
    
    

  
    public function verifieCompte($identifiant,$motDePasse){
        $requete = 'SELECT * FROM Compte WHERE Identifiant=?;';
        $requete = $this->bdd->prepare($requete);
        $requete->execute(array($identifiant));
        
        $donnes = $requete->fetch();
        
        if(password_verify($motDePasse,$donnes['MotDePasse'])){
            $DtoCompte = new DtoCompte($donnes['Identifiant'],$donnes['MotDePasse'],$donnes['Admin']);
            return $DtoCompte;
        }                
    }
    
}
    
    
