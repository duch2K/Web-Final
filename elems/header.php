<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once "../config/db.php";

    $categories = $connect->query("SELECT * FROM Category")
        ->fetchAll(PDO::FETCH_ASSOC);
?>

<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">
                <img src="img/logo.png" alt="DEMAL-Tech logo">
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
            <div class="nav__item"><a href="#">Delivery</a></div>
        </div>
    </div>
</nav>