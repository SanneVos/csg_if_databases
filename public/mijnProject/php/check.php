<?php
echo '<h5 style="color: darkgreen; font-family: courier">'.$check.'</h5>';
toonSysteemArrays();

function toonSysteemArrays() {
    echo '<h4>array sessie</h4><pre>';
    print_r($_SESSION);
    echo '</pre>';

    echo '<h4>array post</h4><pre>';
    print_r($_POST);
    echo '</pre>';
}
?>