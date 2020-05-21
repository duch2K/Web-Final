<?php
    require_once "elems/header.php";

    if (isset($_COOKIE['user_email'])) { 

        $email = $_COOKIE['user_email'];
        $user = $connect->query("SELECT id FROM User WHERE email = '$email'")
        ->fetch(PDO::FETCH_ASSOC);

        $product = $connect->query("SELECT * FROM Product WHERE id = '$user[id]'")
            ->fetch(PDO::FETCH_ASSOC);
    }
    
?>

<div class="wrapper">
    <div class="container">
    <h1 class="page-title">Cart</h1>
        <div class="wrapper__inner">            
            <main class="main">                
                <div class="main__cart">
                    <div class="main__cart-item">
                        <div class="main__cart-item-img"><img src="img/products/<?php echo $product['img'] ?>"></div>
                        <div class="main__cart-item-desc">
                            <div class="main__cart-item-title"><?php echo $product['name'] ?></div>
                            <div class="main__cart-item-price"><?php echo $product['price'] ?> USD</div> 
                        </div>                       
                    </div>
                </div>
            </main>

            <aside class="sidebar">
                <div class="sidebar__catalogue">
                    <h3>Total: </h3>
                    <div class="sidebar__catalogue-total"></div>
                    <div class="sidebar__catalogue-btn">
                        <button>Order</button>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>

<?php
    require_once "elems/footer.php";
?>