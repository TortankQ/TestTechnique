<div>
    <h1>Demande d'intervention</h1>
    <?php if(isset($_POST['btnValider'])): ?>
        <?php include('RecapitulatifDemande.php'); ?>    
    <?php else: ?>
        <?php include('FormulaireDemande.php'); ?> 
    <?php endif ?>
</div>
