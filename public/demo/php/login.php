<?php
include('database.php');
session_start();
if (isset($_POST['mail'])) {
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    $hash = hash('sha512',$pass);
    $sql = "SELECT * FROM accounts WHERE email='".$mail."' AND wachtwoord='".$hash."'";
    $records = mysqli_query($DBverbinding, $sql);
    if (mysqli_num_rows($records) == 1) {
        $_SESSION["user"] = "$mail";
        $_SESSION["melding"] = "U bent ingelogd met {$_SESSION["user"]}.";
        $_SESSION["alert"] = 1; // positieve alert
        header("Location: ../private.php");
    }
    else {
        $_SESSION["melding"] = "Het is niet gelukt om in te loggen. Probeer het opnieuw.";
        $_SESSION["alert"] = 0; // negatieve alert; kun je ook weglaten (als het niet 1 is dan...)
        header("Location: ../index.php");
    }
}
?>