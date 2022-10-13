<?php
    require('ConnectBDD.php');
    $reponse = $cnx->query('select * from typefilm');
    $donnees = $reponse->fetchall(PDO::FETCH_OBJ);
?>