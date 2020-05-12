<?php
    require_once "elems/header.php";

    if (isset($_GET['product'])) {
        $id = $_GET['product'];

        $product = $connect->query("SELECT * FROM Product WHERE id = '$id'")
            ->fetch(PDO::FETCH_ASSOC);
    }
?>
    
<div class="wrapper">
    <div class="container">
        <div class="product">
            <div class="product__image">
                <img src="img/products/<?php echo $product['img'] ?>">
            </div>
            <div class="product__characteristics">
                <div class="product__title"><?php echo $product['name'] ?></div>
                <div class="product__price"><?php echo $product['price'] ?> USD</div>
                <div class="product__desc"><?php echo $product['descr'] ?></div>
                <a href="#" class="product__tocart">To Cart</a>
            </div>
        </div>  

    </div> 
</div> 

<?php
    require_once "elems/footer.php";
?>

