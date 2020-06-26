    <footer class="col-8">
        <div class="footer-copyright text-center mb-3 py-1 bg-roze navbar-light">
            <em>lelijke footer</em> toont bestaan footer ©2020 vnr@CSG</a>
        </div>
    </footer>
</body>
</html>

<?php
$check = $check.'footer.php geladen.';
// require('check.php');
// voorkom dat een verouderde melding bij het herladen van de pagina opnieuw wordt getoond.
unset($_SESSION["melding"]);
?>