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

<div class="overlay overlay-login">
    <form action="" method="POST" class="form form-overlay login-form">
        <div class="close"></div>
        <div class="input login-input">
            <label for="email">Email:</label>
            <input type="email" name="email">
        </div>
        <div class="input login-input">
            <label for="password">Password:</label>
            <input type="password" name="password">
        </div>
        <button type="submit" name="login">Log in</button>
        
    </form>
</div>

<div class="overlay overlay-signup" style="display:none;">
    <form action="" method="POST" class="form-overlay signup-form">
        <div class="close close-login">
        </div>
        <div class="input login-input">
            <label>Email:</label>
            <input type="email" name="email">
        </div>
        <div class="input login-input">
            <label>Password:</label>
            <input type="password" name="password">
        </div>
        <button type="submit" name="login">Log in</button>
        
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
                    <div class="header__user-login">Log in</div>
                </div>
            </a>
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