<?php
    if(!preg_match('/./', $numadh) || !preg_match('/./', $nom)){
        echo "<h2 style='color: blue; font-style: italic;'>Le numéro d'adhérent et le nom doivent être renseignés.</h2>";
    }elseif($results === false){
        echo "<h2 style='color: blue; font-style: italic;'>Attention: Les coordonnées saisies sont incorrectes.</h2>";
    }else { 
        if(empty($resultsloc)){ ?>
            <?php 
                $sql = "insert into location (NUM_ADHERENT, ID_FILM, DEBUT_LOCATION, DATE_RETOUR)
                VALUES ('$numadh', '$idfilm','$today', '$finloc')";
                $cnx->exec($sql);
            ?>
            <h2 style='color: blue; font-style: italic;'><?php echo "Merci ".$nom." pour votre réservation.";?></h2>
            <p style='color: blue;'>Il ne vous plus qu'à passer en boutique pour récupérer votre exemplaire du film '<?php echo $film ?>'</p>
            <?php
                }else {
                    echo "<h2 style='color: blue; font-style: italic;'>Attention: il y a déjà une réservation du film " ."'$film'"."</h2><br>";
                }       
    } 
?>