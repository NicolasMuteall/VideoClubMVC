<?php
    $reponse1 = $cnx->query('select * from film join typefilm ON film.CODE_TYPE_FILM = typefilm.CODE_TYPE_FILM where TITRE_FILM = "'.$titrefilm.'"');
    $results1 = $reponse1->fetch(PDO::FETCH_OBJ);
?>