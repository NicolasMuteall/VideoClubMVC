<?php
    $reponseloc = $cnx->query('select film.ID_FILM, TITRE_FILM from film INNER JOIN location ON location.ID_FILM = film.ID_FILM WHERE TITRE_FILM = "'.$film.'"');
    $resultsloc = $reponseloc->fetchall(PDO::FETCH_OBJ);
?>