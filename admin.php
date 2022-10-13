<?php 
    session_start();
    $_SESSION['page'] = 'admin';
    require('src/var.php');
    require('src/date.php');
    require('src/ConnectBDD.php');
    require('src/AdminConnect.php');
    require('templates/temptitreadmin.php');
    require('templates/tempadmin.php');
?>