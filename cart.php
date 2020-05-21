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
        <div class="wrapper__inner">
            <main class="main">
                <h2 class="main__title">Cart</h2>
                <div class="main__shop">
                    
                </div>
            </main>

            <aside class="sidebar">
                <div class="sidebar__catalogue">
                    
                </div>
            </aside>
        </div>
    </div>
</div>

<?php
    require_once "elems/footer.php";
?>