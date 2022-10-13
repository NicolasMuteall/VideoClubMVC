<?php
    if(!preg_match('/./', $titre)){
        echo "<h5>Le titre doit être renseigné.</h5><br>";
        $error = true;
    }
             
    if(!preg_match('/^[0-9]{4}$/', $annee) || !preg_match('/./', $annee)){
        //Si c'est pas des chiffres ou s'il y a plus de 4 chiffres ou si c'est vide :
        echo "<h5>L'année doit être renseignée et le format doit être correct.</h5><br>";
        $error = true;
    }else{
        $error = false;
    } 
    
    if(!empty($_FILES['affiche'])) {
        $nameFile = $_FILES['affiche']['name'];
        $typeFile = $_FILES['affiche']['type'];
        $sizeFile = $_FILES['affiche']['size'];
        $tmpFile = $_FILES['affiche']['tmp_name'];
        $errFile = $_FILES['affiche']['error'];

        $extensions = ['png', 'jpg', 'jpeg'];
        $typeimg = ['image/png', 'image/jpg', 'image/jpeg'];

        $extension = explode('.', $nameFile);

        $max_size = 100000;

        if(!in_array($typeFile, $typeimg)) {
            echo "<h5>Type de ficher non autorisé.</h5><br>";
            $error = true;
        }
    }

    if($_FILES['affiche']['size'] === 0){
        echo "<h5>Une image doit-être ajoutée.</h5><br>";
        $error = true;
    }
    
    if($donneestitre === false){
        $error = false;
    }else{
        echo "<h5>Le film existe déjà.</h5><br>";
        $error = true;
    }
?>