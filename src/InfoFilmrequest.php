<?php
$sqlRequest = 'SELECT * FROM film join star on star.ID_Star=film.ID_REALIS join typefilm on typefilm.CODE_TYPE_FILM=film.CODE_TYPE_FILM where TITRE_FILM = "'.$titrefilm.'"';
        // Préparation et execution de la requete
        $sqlResponse = $cnx->prepare($sqlRequest);
        $sqlResponse->execute();
        // recupération des informations au format objet
        $results = $sqlResponse->fetch(PDO::FETCH_OBJ);
?>