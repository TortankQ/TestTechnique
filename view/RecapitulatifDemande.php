<div>
    <h1>Récapitulatif</h1>
    <p>Votre nom :<?= $_POST['nom'] ?></p>
    <p>Numéro de la salle :<?= $_POST['bureau'] ?></p>
    <textarea name="problemePanne" rows="6" cols="40"><?= "il y a un problème sur ".$_POST['probleme']." ordinateurs de numéro(s) : ". $_POST['postePanne']?></textarea>
    <textarea name="description" rows="6" cols="40"><?= $_POST['description']?></textarea>
    
    <?php $_SESSION['nom'] = $_POST['nom'] ?>
    <?php $_SESSION['bureau'] = $_POST['bureau'] ?>
    <?php $_SESSION['probleme'] = $_POST['probleme'] ?>
    <?php $_SESSION['postePanne'] = $_POST['postePanne'] ?>
    <?php $_SESSION['description'] = $_POST['description'] ?>
    
    
    <form method="POST" action="../controller/DemandeInterventionController.php">
        <input type="submit" name="btnValiderRecap" value="Je confirme ma demande d'intervention">
    </form>
</div>
