<?php
    /*  Dit bestand is gebruikt om gebruikers aan te maken.
        Natuurlijk doe je dat normaliter met een aanmeldformulier (form) op je site.
    */
    
    // require('database.php'); // uitgezet zodat je niet per ongeluk de database vertroebelt

    $naam = 'Vincent';
    $naam = utf8_encode($naam);
    $email = 'vnv@csg.nl';
    $wachtwoord = 'Groningen';
    
    $hash = hash('sha512',$wachtwoord);

    $sql = "INSERT INTO `accounts` (`id`, `naam`, `email`, `wachtwoord`) VALUES (NULL, '$naam', '$email', '$hash');";
    mysqli_query($DBverbinding, $sql);
?>