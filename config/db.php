<?php 
require "config.php";

$connect = new PDO("mysql:host=localhost; dbname=demal_tech; charset: utf8", "root", "");

if (!$connect) {
    echo 'Failed to connect to the DB! <br>';
    exit();
}
