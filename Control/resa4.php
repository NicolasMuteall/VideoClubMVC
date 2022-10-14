<?php
    session_start();
    $_SESSION['page'] = 'resa4';
    require('../src/date.php');
    require('../src/ConnectBDD.php');

    require('../src/var.php');

    require('../src/Userconnectrequest.php');
    require('../src/LoctestRequest.php');
    require('../templates/temptitre.php');
    require('../templates/tempResa4.php');
?>