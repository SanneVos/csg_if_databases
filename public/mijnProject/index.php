<?php
$paginaTitel = 'Home';
$paginaType = 'openbaar';
require('php/header.php');

$sql = "SELECT * FROM fotos";      
$records = mysqli_query($DBverbinding, $sql);
$aantalFotos = mysqli_num_rows($records);
if (isset($_GET["nr"]) && $_GET["nr"] <= $aantalFotos && $_GET["nr"] > 0) {
    $fotoNummer = $_GET["nr"];
}
else {
    $fotoNummer = 1;
}

$sql = "SELECT * FROM fotos WHERE id = $fotoNummer";
$record = mysqli_query($DBverbinding, $sql);
$fotoData = mysqli_fetch_assoc($record);

$sql = "SELECT id,naam FROM accounts";
$records = mysqli_query($DBverbinding, $sql);
$namen = [];
if (mysqli_num_rows($records) > 0) {
    while($naam = mysqli_fetch_assoc($records)) {
        $namen[$naam['id']] = utf8_decode($naam['naam']);
    }
}

$sql = "SELECT * FROM reacties WHERE foto = $fotoNummer";
$records = mysqli_query($DBverbinding, $sql);
$reacties = [];
if (mysqli_num_rows($records) > 0) {
    while($record = mysqli_fetch_assoc($records)) {
        array_push($reacties,$record);
    }
}

?>

    <div class="container-fluid text-white rounded bg-dark">
        <div class="row">
            <div class="col-md-8 align-items-center">
                <img src="images/<?= $fotoNummer?>.jpg" class="img-fluid">             
            </div>
            <section class="col-md-4 p-5 align-items-center bg-secondary">
                <h1 class="display-4"><?= utf8_decode($fotoData['titel']).' ('.$fotoData['id'].'/'.$aantalFotos.')'?></h1>
                <h6><?= utf8_decode($fotoData['subtitel'])?></h6>
                <p><?= utf8_decode($fotoData['omschrijving'])?></p>

<?php
$vorige = $fotoNummer - 1;
$volgende = $fotoNummer + 1;
if ($vorige == 0) {
    $vorige = $aantalFotos;
}
if ($volgende > $aantalFotos) {
    $volgende = 1;
}
echo '<a href="?nr='.$vorige.'"><button type="submit" class="btn btn-secondary mb-2">&#8592;</button></a>';
echo " <strong>$fotoNummer</strong> ";
echo '<a href="?nr='.$volgende.'"><button type="submit" class="btn btn-secondary mb-2">&#8594;</button></a>';
?>

<?php
if ($reacties == []) {
    echo '<h3>nog geen reacties</h3>';
}
else {
    echo '<h3>reacties</h3><hr>';
    foreach ($reacties as $reactie) {
        echo "<article><h6>{$namen[$reactie['account']]}</h6><p>".utf8_decode($reactie['reactie'])."</p><hr></article>";
    }
}
?>
                              
            </section>             
        </div> 
    </div>

<?php
require('php/footer.php');
?>