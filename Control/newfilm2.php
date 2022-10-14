<?php
    session_start();
    $_SESSION['page'] = 'newfilm2';
    require('../src/date.php');
    require('../src/ConnectBDD.php');
    require('../templates/temptitreadmin.php');
    require('../src/var.php');
    require('../src/pathandtitreRequest.php');
    require('../templates/tempnewfilm2.php');