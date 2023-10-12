<!-- This file checks if logged in user is not buyer -->
<?php
    if ($_SESSION["role"] !== 'buyer') {
        header("location: ./index.php");
        exit();
    }
?>