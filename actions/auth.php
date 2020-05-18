<?php
require_once "../config/db.php";

if (isset($_POST['email'])) {

    $email = $_POST['email'];

    $user = $connect->query("SELECT email, password FROM User 
        WHERE email = '$email';")
        ->fetchAll(PDO::FETCH_ASSOC);

    setcookie('user-email', $user['email'], time() + 3600, "Web-Final/");
    echo $user['email'];
}
var_dump($_POST);
// header("Location: ../index.php");
