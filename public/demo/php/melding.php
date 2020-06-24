<?php
    if ($_SESSION["melding"]!='') {
        if ($_SESSION["alert"] == 1) {
            // https://www.w3schools.com/bootstrap4/bootstrap_alerts.asp
            echo '<div class="alert alert-success">';
        }
        else {
            echo '<div class="alert alert-danger">';
        }
    echo $_SESSION["melding"].'</div>';
    }
?>