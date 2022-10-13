<?php
    $idCatFilm="";

    if (isset ($_POST["choixtype"]) || ($_POST["choixtype"] != "")) {
        $idCatFilm = $_POST["choixtype"];
    }else{
        header('Location: index.php');
    }; 
?>