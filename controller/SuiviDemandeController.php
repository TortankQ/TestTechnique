<?php
    require_once('../model/DaoCompte.php');
    require_once('../model/DtoCompte.php');
    require_once('../model/DaoDemandeIntervention.php');
    require_once('../model/DtoDemandeIntervention.php');
    session_start();
   
    $page = "SuiviDemande";
    

    if(!isset($_SESSION)){
        header('Location: ./FrontController.php');
    }

    $bool= $_SESSION['DtoCompte']->getAdmin();
    if(!$bool){
        header('Location: ./FrontController.php');
    }
    
    $DaoDemandeIntervention = new DaoDemandeIntervention('localhost','TestTechnique','root','');
    $requete = 'SELECT * FROM DemandeIntervention;';
    $requete = $DaoDemandeIntervention->query($requete);
        
    include('../view/layout.php');