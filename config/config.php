<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $config = array(
        'title' => 'DEMAL-Tech',
        'db' => array(
            'server' => 'localhost',
            'username' => 'root',
            'password' => 'root',
            'name' => 'demal_tech'
        )
    );

    require "db.php";

?>