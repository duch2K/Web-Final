<?php 

$connect = new PDO('mysql:host=localhost; dbname=MushroomShop; charset: utf8', 'root', 'root');

if (!$connect) {
    echo 'Failed to connect to the DB! <br>';
    exit();
}