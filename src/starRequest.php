<?php
    $reponsereal = $cnx->query("select * from star");
    $resultsreal = $reponsereal->fetchall(PDO::FETCH_OBJ);
?>