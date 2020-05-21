<?php
    require_once "elems/header.php";

    if (isset($_COOKIE['user_email'])) { 

        $email = $_COOKIE['user_email'];
        $user = $connect->query("SELECT id FROM User WHERE email = '$email'")
        ->fetch(PDO::FETCH_ASSOC);

        $products = $connect->query("SELECT P.* FROM Cart C JOIN Product P
            ON P.id = C.productID WHERE userID = '$user[id]'")
            ->fetchAll(PDO::FETCH_ASSOC);
    }
    
?>

<div class="wrapper">
    <div class="container">
        <div class="new-order">
            <form action="">
                <label for="fullname">Full Name</label><br>
                <input type="text" name="fullname"><br><br>
                <label for="email">E-mail</label><br>
                <input type="text" name="email"><br><br>
                <label for="phone">Phone</label><br>
                <input type="text" name="phone"><br><br>
                <label for="city">City</label><br>
                <input type="text" name="city"><br><br>
                
                <label for="address">Address</label><br>
                <textarea name="address" rows="2"></textarea><br><br>
                <label for="comment">Comment</label><br>
                <textarea name="comment" rows="2"></textarea><br><br>

                <label for="phone">Delivery</label><br>
                <input type="radio" name="delivery" value="0"><label for="delivery"> Pickup</label><br>
                <input type="radio" name="delivery" value="10"><label for="delivery"> Courier</label><br><br>

                <input type="checkbox"name="agreement" value="agree"><label for="agreement"> I agree to the terms of service</label><br>
            
            
            </form>
        </div>
    </div>
</div>

<?php
    require_once "elems/footer.php";
?>