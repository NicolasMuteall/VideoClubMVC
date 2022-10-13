<?php 
    switch($_SESSION['page']){
        
        case 'resa4':
            $film = $_GET['choixfilm'];
            $idfilm = $_GET['idfilm'];
            $nom = $_POST['nom'];
            $numadh = $_POST['numadh'];
            $today = date("Y-m-d"); 
            $finloc = date("Y-m-d", strtotime('+15 days'));
            break;
        
        case 'admin':
            $login =  htmlentities($_POST['login']);
            $mdp = htmlentities($_POST['mdp']);
            break;

        case 'newfilm2':
            $titre = $_POST['titre'];
            $type = $_POST['choixtype'];
            $real = $_POST['choixreal'];
            $annee = $_POST['annee'];
            $affiche = $_FILES['affiche'];
            $resume = $_POST['resume'];
            $error = false;
            break;
    }
?>
