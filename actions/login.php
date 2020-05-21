<?php
require_once "../config/db.php";

if (isset($_POST['email'])) {

    $email = $_POST['email'];
    $passwd = $_POST['password'];

    $user = $connect->query("SELECT email, password FROM User 
        WHERE email = '$email';")
        ->fetch(PDO::FETCH_ASSOC);

    if (password_verify($passwd, $user['password']) and count($user) > 0) {  
        $user = json_encode($user);
        echo $user; 
    } else {
        echo '  '; 
    }

}
