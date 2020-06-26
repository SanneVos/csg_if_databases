<?php
// echo '<h4>'.$_SESSION["melding"].'</h4>';
if ($_SESSION["user"]) {
    // echo '<a href="php/logout.php">Log Uit</a>';
    echo '<a href="php/logout.php"><button type="submit" class="btn btn-secondary mb-2">Logout</button></a>';

}
else {
?>

                <form method="POST" class="form-inline" action="php/login.php">
                    <input type="email" class="form-control mb-2 mr-sm-2" placeholder="e-mail" id="mail" name="mail">
                    <input type="password" class="form-control mb-2 mr-sm-2" placeholder="wachtwoord" id="pass" name="pass">
                    <button type="submit" class="btn btn-secondary mb-2">Login</button>
                </form>

<?php
};
?>