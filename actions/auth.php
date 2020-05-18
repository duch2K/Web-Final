<?php
require_once "../config/db.php";

if (isset($_POST)) {

    $email = $_POST['email'];
    $passwd = $_POST['password'];
    //$passwd = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $account = $connect->query("SELECT email, password FROM User 
        WHERE email = '$email' AND password = '$passwd';")
        ->fetch(PDO::FETCH_ASSOC);

}

header("Location: index.php");
