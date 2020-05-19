<?php
require_once "../config/db.php";

if (isset($_GET['product']) and isset($_COOKIE['user_email'])) {
    // $user = $connect->query("");
}

header('Location: ../index.php');