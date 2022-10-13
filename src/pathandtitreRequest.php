<?php
    $reponsetype = $cnx->query('select * from typefilm where CODE_TYPE_FILM = "'.$type.'"');
    $donneestype = $reponsetype->fetch(PDO::FETCH_OBJ);
    $chemin = $donneestype->LIB_TYPE_FILM;

    $reponsetitre = $cnx->query('select * from film where TITRE_FILM = "'.$titre.'"');
    $donneestitre = $reponsetitre->fetch(PDO::FETCH_OBJ);
?>