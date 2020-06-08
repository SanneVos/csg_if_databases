<?php
    /*  Dit bestand is gebruikt om handmatig foto's aan de database toe te voegen.
        Natuurlijk doe je dat normaliter met een formulier (form) op je site
        waarbij de gebruiker ook het bestand kan uploaden.
    */

    // require('database.php'); // uitgezet zodat je niet per ongeluk de database vertroebelt

    $titel = utf8_encode('Winterwonderland');
    $subtitel = utf8_encode('Katwijk aan Zee, 27 april 2020');
    $omschrijving = utf8_encode('Zwart-wit-bewerking van een schilderachtig tafereel.');

    $sql = "INSERT INTO `fotos` (`id`, `titel`, `subtitel`, `omschrijving`) VALUES (NULL, '$titel', '$subtitel', '$omschrijving');";
    mysqli_query($DBverbinding, $sql);
    echo $sql;
?>