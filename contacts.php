<?php
    require_once "elems/header.php";

    if (isset($_GET['product'])) {
        $id = $_GET['product'];

        $product = $connect->query("SELECT * FROM Product WHERE id = '$id'")
            ->fetch(PDO::FETCH_ASSOC);
    }
?>







<?php
    require_once "elems/footer.php";
?>