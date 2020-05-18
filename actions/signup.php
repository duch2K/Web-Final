<?php
require_once "../config/db.php";

if (isset($_POST['signup'])) {
    $email = trim($_POST['email']);
    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']);
    $passwd = $_POST['password'];

    $passwd = password_hash($passwd, PASSWORD_DEFAULT);

    $connect->query("INSERT INTO User (name, surname, email, password) 
        VALUES ('$name', '$surname', '$email', '$passwd')");

    header('Location: ../index.php');    
}

