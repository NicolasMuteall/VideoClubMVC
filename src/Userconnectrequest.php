<?php    
    $reponse = $cnx->query('select NUM_ADHERENT, PRENOM_ADHERENT from adherent where NUM_ADHERENT = "'.$numadh.'" and PRENOM_ADHERENT = "'.$nom.'"');
    $results = $reponse->fetch(PDO::FETCH_OBJ);
?>