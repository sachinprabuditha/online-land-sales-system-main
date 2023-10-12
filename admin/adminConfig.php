<!-- This file checks if logged in user is not admin -->
<?php
    if ($_SESSION["role"] !== 'admin') {
        header("location: ./index.php");
        exit();
    }
?>