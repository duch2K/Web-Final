<?php
    require_once "../config/db.php";

    if (isset($_GET['product']) and isset($_COOKIE['user_email'])) {
        $product = $_GET['product'];
        
        $email = $_COOKIE['user_email'];
        $user = $connect->query("SELECT id FROM User WHERE email = '$email'")
        ->fetch(PDO::FETCH_ASSOC);


        $connect->query("DELETE FROM Cart WHERE productID = $product");
        header('Location: ../cart.php?user=$user[id]');

        
    }
?>