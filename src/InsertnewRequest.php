<?php
    if(preg_match('/^[0-9]{4}$/', $annee) &&
    preg_match('/./', $annee) &&
    !empty($_FILES['affiche']) &&
    in_array($typeFile, $typeimg) &&
    $_FILES['affiche']['size'] > 0 &&
    $donneestitre === false
){ 
    move_uploaded_file($tmpFile, "C:\\wamp64\\www\\EX_PHP\\VideoBootstrap\\pictures\\FilmMiniatures\\".$chemin."\\ " .uniqid() . '.' . strtolower(end($extension) ) );

    $sql = "INSERT into film (TITRE_FILM, ANNEE_FILM, ID_REALIS, CODE_TYPE_FILM, RESUME, REF_IMAGE)
    VALUES ('$titre', '$annee', '$real', '$type', '$resume', '$nameFile')";
    $cnx->exec($sql);
    /*Si suppression d'un film, il faut faire la requête "ALTER TABLE 'nom de la table' AUTO_INCREMENT=0;" pour
    reinitialiser l'auto-increment*/
    echo "<h2>Film ajouté avec succès !</h2><br>";
}
?>