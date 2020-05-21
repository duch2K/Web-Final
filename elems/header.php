<?php
    require_once "config/db.php";

    $categories = $connect->query("SELECT * FROM Category")
        ->fetchAll(PDO::FETCH_ASSOC);

    $user = false;
    if (isset($_COOKIE['user_email'])) {
        $user = $connect->query("SELECT * FROM User WHERE email = '$_COOKIE[user_email]'")
            ->fetch(PDO::FETCH_ASSOC);
        setcookie('user_email', $user['email'], time() + 3600);
    }
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
    <form action="actions/login.php" method="POST" class="form-login form-overlay">
        <div class="close close-login"></div>
        <h2 class="form-title">Log in</h2>
        <div class="input login-input">
            <input type="email" name="email" class="login-email" placeholder="Email">
        </div>
        <div class="input login-input">
            <input type="password" name="password" class="login-password" placeholder="Password">
            <div class="form-error error-email"></div>
        </div>

        <button type="submit" name="login">Log in</button>
        <div class="signup-suggest">Don't have an account? <span class="signup-link">Sign up</span></div>
    </form>
</div>

<div class="overlay overlay-signup">
<form action="actions/signup.php" method="POST" class="form-signup form-overlay">
        <div class="close close-signup"></div>
        <h2 class="form-title">Sign up</h2>
        <div class="input signup-input">
            <input type="email" name="email" class="signup-email" placeholder="Email" required>
        </div>
        <div class="input signup-input">
            <input type="text" name="name" class="signup-name" placeholder="Name" required>
            <div class="form-error error-email"></div>
        </div>
        <div class="input signup-input">
            <input type="text" name="surname" class="signup-surname" placeholder="Surname" required>
            <div class="form-error error-email"></div>
        </div>
        <div class="input signup-input">
            <input type="password" name="password" class="signup-password" placeholder="Password" required>
            <div class="form-error error-email"></div>
        </div>
        <div class="input signup-input">
            <input type="password" name="password2" class="signup-password2" placeholder="Repeat password" required>
            <div class="form-error error-email"></div>
        </div>
        <button type="submit" name="signup">Sign up</button>
        
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
                <form action="index.php" method="GET" class="header__search">
                    <input type="text" name="search" class="header__search-input" placeholder="Search in catalogue...">
                    <button type="submit" class="header__search-btn">
                        <img src="img/search.svg" class="search-btn" alt="search">
                    </button>
                </form>
            </div>
            <div class="header__r">
                <div class="header__cart">
                <?php if (isset($_COOKIE['user_email'])): ?>
                    <a href="cart.php?user=<?php echo $user['id']; ?>">
                        <img src="img/cart.png" alt="cart">
                    </a>    
                <?php else: ?>
                    <a href="cart.php?user=<?php echo $user['id']; ?>">
                        <img src="img/cart.png" alt="cart">
                    </a>
                <?php endif; ?>
                </div>
                <div class="header__user">
                    <img src="img/user.png" alt="user">
                    <?php if (isset($_COOKIE['user_email'])): ?>
                        <div class="user-name">
                            <?php echo $user['name'] . ' ' . $user['surname']; ?>
                        </div>
                    <?php else: ?>
                        <div class="header__user-login">Log in</div>
                    <?php endif; ?>
                    
                </div>
            </a>
        </div>
    </div>
</header>

<nav class="nav">
    <div class="container">
        <div class="nav__inner">
            <div class="nav__item"><a href="index.php">Catalogue</a></div>
            <div class="nav__item"><a href="about.php">About</a></div>
            <div class="nav__item"><a href="contacts.php">Contacts</a></div>
        </div>
    </div>
</nav>