<?php    
    $reponse = $cnx->query('select LOGIN_ADMIN, PASS_ADMIN from admin where LOGIN_ADMIN = "'.$login.'" and PASS_ADMIN = "'.$mdp.'"');
    $results = $reponse->fetch(PDO::FETCH_OBJ);

    if($results === false){
        header('Location: /EX_PHP/VideoClubMVC/index.php');
    }
?>