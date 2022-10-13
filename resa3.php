<?php 
    require('src/date.php');
    require('src/ConnectBDD.php');

    $titrefilm = $_GET['film'];
    $erreur = "";

    require('src/Searchrequest.php');
    
    if($results1 === false){
        $titrefilm = 'Die Hard 1';
        $erreur = "<h4 class='text-primary mt-3'>Nous n'avons pas trouvé votre film, nous vous en avons choisi un autre.</h4>";
    };

    require('src/InfoFilmrequest.php');
    
    $idfilm = $results->ID_FILM;

    require('templates/temptitre.php');
    require('templates/tempResa3.php');
?>