<?php

if (isset($_POST['signup'])) {
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
    $passwd = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $passwd2 = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    if ($passwd != $passwd2) {

    } else {
        $passwd = password_hash($passwd, PASSWORD_DEFAULT);

        $connect->query("INSERT INTO User (name, surname, email, password) 
            VALUES ('$name', '$surname', '$email', '$passwd')");
    }
}

