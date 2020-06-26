<?php
$check = 'header.php geladen.<br>';
require('database.php');
session_start();
if (isset($_SESSION["user"])) {
    $check = $check.'gebruiker ingelogd.<br>';
    // $css = 'private.css'; // in dit voorbeeld maar één stylesheet
    $css = 'public.css'; // daarom is dit niet nodig, maar ik heb het laten staan voor wie het wil gebruiken
}
else {
    $check = $check.'niemand ingelogd.<br>';
    $css = 'public.css';
    if ($paginaType == 'prive') {
    header("Location: index.php");
    }
}
// require('loginFormulier.php'); Deze wordt nu pas na een stukje html aangeroepen
?>

<!doctype html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="VNR@csg">
        <link rel="stylesheet" href="css/bootstrap441.min.css">
        <link rel="stylesheet" type="text/css" href="css/<?= $css?>">
        <title>Dutch Painters - <?= $paginaTitel?></title>
    </head>
<body>

    <header>
<?php
    require('melding.php');
?>    
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-8 pt-1 text-center">
                <nav class="navbar navbar-expand-sm bg-white navbar-light">
                    <a class="navbar-brand" href="#">
                    <img src="images/logo.png" alt="Logo" style="width:40px;">
                    </a>
                    <ul class="navbar-nav"> <!-- Merk op dat je dit in een php-functie compacter zou kunnen doen -->
                        <li class="nav-item <?php if ($paginaTitel=='Home') {echo 'active';}?>">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item <?php if ($paginaTitel=='About') {echo 'active';}?>">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="col-4 d-flex justify-content-end align-items-center">
<?php            
    require('loginFormulier.php');
?>
            </div>
        </div>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Dutch Painters</h1>
                <h2 class="display-3">The greatest Dutch Painters</h2>
            </div>
        </div>
    </header>