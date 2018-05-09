<table>
    <tr>
        <th></th>
        <th>Num</th>
        <th>Salle</th>
        <th>Description</th>
        <th>Remarques</th>
        <th>Demandée le</th>
        <th>Suivi</th>
    </tr>
    <tr>
<? while($data = $requete->fetch()) { ?>
        <td>
        <form method="POST" action="../controller/Recapitulatif.php">
            <input type="submit" name="btnVoir" value="Voir">
            <input id="NumIntervention" name="NumIntervention" type="hidden" value="<?= $data['IdIntervention']?>">
        </form>
        </td>
        <td><? echo $data['IdIntervention']; ?></td>
        <td><? echo $data['Bureau']; ?></td>
        <td><? echo $data['Description']; ?></td>
        <td><? echo $data['Probleme']; ?></td>
        <td><? echo $data['Statut']; ?></td>
    </tr>
      <? }  
      $req->closeCursor();   
        ?>
</table>

