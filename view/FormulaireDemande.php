<form method="POST" action="../controller/DemandeInterventionController.php" >
       
    <label>Votre nom :</label> 
    <input type="text" name="nom" id="nom" placeholder="Ex : Bernard1234" size="30"/>
        
    <label>Bureau n° :</label> 
    <input type="text" name="bureau" id="bureau" placeholder="Ex : B256" size="30"/>
        
    <p>Votre problème concerne :</p>
    <input type="radio" id="problemeChoix1"
     name="probleme" value="Un ou plusieurs ordinateur(s)">
    <label for="problemeChoix1">Un ou plusieurs ordinateur(s)</label>

    <input type="radio" id="problemeChoix2"
     name="probleme" value="Tous les ordinateurs">
    <label for="problemeChoix2">Tous les ordinateurs</label>
        
    <input type="radio" id="problemeChoix3"
     name="probleme" value="Une imprimante">
    <label for="problemeChoix3">Une imprimante</label>

    <input type="radio" id="problemeChoix4"
     name="probleme" value="Autre">
    <label for="problemeChoix4">Autre</label>
        
    <br/>
    <label>Eventuellement, saisissez le ou les numéro(s) d'ordinateur(s) qui vous pose(nt) un problème </label> 
    <input type="text" name="postePanne" id="postePanne" placeholder="Ex : Poste bureau" size="30"/>
        
    <br/>
    <label>Décrivez précisement votre problème</label> 
    <textarea name="description" rows="6" cols="40"></textarea>
        
    <br/>
    <input type="submit" name="btnValider" value="Valider">
             
</form>