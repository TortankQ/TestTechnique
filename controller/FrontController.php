<?php
    
    session_start();
    
    require_once('../model/DaoCompte.php');
    require_once('../model/DtoCompte.php');
    

   
    $page = 'FormulaireConnexion';

    if(isset($_POST['btnConnexion'])){
        if(isset($_POST['identifiant'])&& $_POST['identifiant']!=""){
            if(isset($_POST['motDePasse'])&& $_POST['motDePasse']!=""){
                
                $bdd = new DaoCompte('localhost','TestTechnique','root','');
                
                $DtoCompte = $bdd->verifieCompte($_POST['identifiant'],$_POST['motDePasse']);
                
                if(isset($DtoCompte)){
                    $_SESSION['DtoCompte'] = $DtoCompte;
                    if($DtoCompte->getAdmin()){
                        header('Location: ./SuiviDemandeController.php');
                    }else{
                        header('Location: ./DemandeInterventionController.php');
                    }
                }
                
            }else{
                $erreur = "Merci de renseigner un mot de passe";
            }
        }else{
            $erreur =  "Merci de renseigner un identifiant";
        }
    }

    include('../view/layout.php');