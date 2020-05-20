<?php
require_once "../config/db.php";

if (isset($_GET['product']) and isset($_COOKIE['user_email'])) {
    $id = $_GET['product'];
    
    $email = $_COOKIE['user_email'];
    $user = $connect->query("SELECT id FROM User WHERE email = '$email'")
        ->fetch(PDO::FETCH_ASSOC);

    $connect->query("INSERT INTO Cart (userID, productID) VALUES ('$user[id]', '$id')");
}

header('Location: ../index.php');