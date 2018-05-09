<?php
    require_once('../model/DaoCompte.php');
    require_once('../model/DtoCompte.php');
    require_once('../model/DaoDemandeIntervention.php');
    require_once('../model/DtoDemandeIntervention.php');
    session_start();
   
    $page = "DemandeIntervention";
    

    if(!isset($_SESSION)){
        header('Location: ./FrontController.php');
    }

    $bool= $_SESSION['DtoCompte']->getAdmin();
    if($bool){
        header('Location: ./FrontController.php');
    }
        
    if(isset($_POST['btnValiderRecap'])){
       
        $bdd = new DaoDemandeIntervention('localhost','TestTechnique','root','');
        
        $DtoDemandeIntervention = new DtoDemandeIntervention($_SESSION['nom'],$_SESSION['bureau'],$_SESSION['probleme'],$_SESSION['postePanne'],$_SESSION['description'],"En cours");
        
        $bool = $bdd->insertDemandeIntervention($DtoDemandeIntervention);
        if($bool){
            echo "Votre demande a bien été enregistrée sous le numéro : ".$DtoDemandeIntervention->getIdIntervention();
        }
    }
    
    

    include('../view/layout.php');