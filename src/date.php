<?php
        date_default_timezone_set("Europe/Paris");
        $dateDuJour = getdate();

        $mois = "";
        $jours = "";

        if ($dateDuJour["mon"] = 9){
            $mois = "Septembre";
        } else{
            $mois = $dateDuJour["mon"];
        }
        if ($dateDuJour["mday"] < 10){
            $jours = "0".$dateDuJour["mday"];
        } else{
            $jours = $dateDuJour["mday"];
        }
?>