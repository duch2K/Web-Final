<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once "config/db.php";

    $categories = $connect->query("SELECT * FROM Category")
        ->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEMAL-Tech</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="overlay" style="display:none;">
    <div>

    </div>
    <form action="" method="POST">
        <div class="form-input">
            <label></label>
            <input>
        </div>
        <div class="form-input">
            <label></label>
            <input>
        </div>
        <button type="submit">Log in</button>
        
    </form>
</div>

<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">
                <a href="index.php">
                    <img src="img/logo.png" alt="DEMAL-Tech logo">
                </a>
            </div>
            <div class="header__center">
                <div class="header__search">
                    <input type="text" class="header__search-input" placeholder="Search in catalogue...">
                    <div class="header__search-btn">
                        <img src="img/search.svg" class="search-btn" alt="search">
                    </div>
                </div>
            </div>
            <div class="header__r">
                <div class="header__cart">
                    <img src="img/cart.png" alt="cart">
                </div>
                <div class="header__user">
                    <img src="img/user.png" alt="user">
                </div>
            </div>
        </div>
    </div>
</header>

<nav class="nav">
    <div class="container">
        <div class="nav__inner">
            <div class="nav__item"><a href="#">Catalogue</a></div>
            <div class="nav__item"><a href="#">About</a></div>
            <div class="nav__item"><a href="#">Contacts</a></div>
        </div>
    </div>
</nav>