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
        <div class="contacts">
        <h1>Contacts</h1>
            <p>You can find us at: ​Kazakhstan, Almaty, Manasa 34/1</p>
            <p>How to get there: intersection of Zhandosov and Manas streets</p>
            <p>Phone: <a href="tel:+77772588032">+7 777 258 8032</a>, <a href="tel:+77052179491">+7 705 217 9491</a></p>
            <p>Email: <a href="mailto:sarsenbek.d@gmail.com">sarsenbek.d@gmail.com</a>, <a href="mailto:tagabay.yerbolat@gmail.com">tagabay.yerbolat@gmail.com</a></p>
            <p><strong>Schedule</strong></p>
            <table class="contacts__table">
                <tr><td>Monday</td><td>9:00 to 21:00</td></tr>
                <tr><td>Tuesday</td><td>9:00 to 21:00</td></tr>
                <tr><td>Wednesday</td><td>9:00 to 21:00</td></tr>
                <tr><td>Thursday</td><td>9:00 to 21:00</td></tr>
                <tr><td>Friday</td><td>9:00 to 21:00</td></tr>
                <tr><td>Saturday</td><td>10:00 to 18:00</td></tr>
                <tr><td>Sunday</td><td>10:00 to 18:00</td></tr>
            </table>
            <p><strong>Requisites</strong></p>
            <p>LLP "DEMAL-TECH"</p>
            <p>BIN 000123456789</p>
            <p>P/account in KZT: KZ00000123456789</p>
        </div>
    </div>
</div>




<?php
    require_once "elems/footer.php";
?>