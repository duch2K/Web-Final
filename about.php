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
        <div class="about">
            <h1>About</h1>
            <p>Lorem ipsum dolor sit amet, ei eos novum oporteat lobortis. Ei malorum omnesque pertinacia qui, ubique deleniti expetenda nec ne, quem voluptatum sed no. Eos ad nemore dictas dissentiunt. Et vel illum consequuntur necessitatibus. Inani omnesque ut sit.</p>
            <p>Mei ea ignota eleifend, possim option ei usu. Epicuri expetendis vim ut, vis ea ferri reformidans. An natum omnes pri, sed ut eruditi dolorum inciderint, in his probo tation. No pri quas persius, mea ut assum eligendi indoctum, delectus accusamus id vix. Ei illud atomorum consequat sed, id vix primis viderer pericula, enim nobis maluisset no vix.</p>
            <p>Ut nam tamquam reformidans liberavisse, id quot recusabo duo. Vel id ignota eloquentiam disputationi. Eam ne equidem definitiones. Est dicant deseruisse complectitur cu, eu admodum mnesarchum nec, duo autem numquam percipitur at. Has ad diam discere delicata, iracundia suscipiantur conclusionemque an sea, torquatos intellegam sit ad.</p>
        </div>
    </div>
</div>


<?php
    require_once "elems/footer.php";
?>