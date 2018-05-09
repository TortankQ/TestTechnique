<?php

/**
 * 
 * @author Tayfun Ozturk
 */

class DaoDemandeIntervention{
    
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
    
    
    public function insertDemandeIntervention($DtoDemandeIntervention){
        
        $requete = 'INSERT INTO DemandeIntervention(NomUtilisateur, Bureau, Probleme, PannePoste, Description, Statut) VALUES(:t_NomUtilisateur,:t_Bureau,:t_Probleme,:t_PannePoste,:t_Description,:t_Statut);';
        $requete = $this->bdd->prepare($requete);
        
        $requete->execute(array(
            't_NomUtilisateur' => $DtoDemandeIntervention->getNomUtilisateur(),
            't_Bureau' => $DtoDemandeIntervention->getBureau(),
            't_Probleme' => $DtoDemandeIntervention->getProbleme(),
            't_PannePoste' => $DtoDemandeIntervention->getPannePoste(),
            't_Description' => $DtoDemandeIntervention->getDescription(),
            't_Statut' => $DtoDemandeIntervention->getStatut()
            
        ));
        
        $requete = 'SELECT * FROM DemandeIntervention WHERE Description=? ;';
        $requete = $this->bdd->prepare($requete);
        $requete->execute(array($DtoDemandeIntervention->getDescription()));
        
        $donnes = $requete->fetch();
        
        $DtoDemandeIntervention->setIdIntervention($donnes['IdIntervention']);
        
        return true;
    }
    
    
    

}
    
    
