<!-- This file checks if logged in user is not seller -->
<?php
    if ($_SESSION["role"] !== 'seller') {
        header("location: ./index.php");
        exit();
    }
?>