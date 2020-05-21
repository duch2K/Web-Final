<?php
if(isset($_COOKIE['user_email'])):
    
setcookie('user_email', '', time() - 3600, '/Web-Final');
    unset($_COOKIE['user_email']);

header('Location: ../index.php');
endif;
?>