<?php
    require_once "elems/header.php";

    if (isset($_GET['category'])) {
        $cat = $_GET['category'];
        $products = $connect->query("SELECT P.* FROM Product P JOIN Category C ON
            P.categoryID = C.id WHERE C.title = '$cat'");
    
    } else {
        $products = $connect->query("SELECT * FROM Product");
    }

    $products = $products->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="wrapper">
    <div class="container">
        <div class="wrapper__inner">
            <aside class="sidebar">
                <div class="sidebar__catalogue">
                    <h3 class="sidebar__catalogue-title">
                        Catalogue
                    </h3>
                    <div class="line"></div>
                    <ul class="sidebar__cats">
                        <li class="sidebar__cats-item"><a href="index.php">All</a></li>
                    <?php foreach ($categories as $category) { ?>
                        <li class="sidebar__cats-item">
                            <a href="index.php?category=<?php echo $category['title'] ?>">
                                <?php echo $category['name'] ?>
                            </a>
                        </li>
                    <?php } ?>
                    </ul>
                </div>
            </aside>

            <main class="main">
                <h2 class="main__title">Products</h2>
                <div class="main__shop">

                <?php foreach ($products as $product) { ?>
                    <div class="shop-item">
                        <a href="product.php?product=<?php echo $product['id'] ?>" class="shop-item-link">
                            <div class="shop-item-img">
                                <img src="img/products/<?php echo $product['img'] ?>" alt="<?php echo $product['name'] ?>">
                            </div>
                        </a>
                        <h3 class="shop-item-title">
                            <a href="product.php?product=<?php echo $product['id'] ?>" class="shop-item-link">
                                <?php echo $product['name'] ?>
                            </a>
                        </h3>
                        <div class="shop-item-price"><?php echo $product['price'] ?> USD</div>
                        <div class="shop-item-cart"><a href="add-cart.php?product=<?php echo $product['id'] ?>">Add to cart</a></div>
                    </div>
                <?php } ?>
                    
                </div>
            </main>
        </div>
    </div>
</div>

<?php
    require_once "elems/footer.php";
?>
