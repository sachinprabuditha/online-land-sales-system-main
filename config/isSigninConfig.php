<!-- This file checks if user is logged in -->
<?php
    if (isset($_SESSION["id"])) {
        if($_SESSION["role"] === 'admin') {
            header("location: ./adminDashboard.php");
            exit();
        } else if($_SESSION["role"] === 'buyer') {
            header("location: ./buyerDashboard.php");
            exit();
        } else if($_SESSION["role"] === 'seller') {
            header("location: ./sellerDashboard.php");
            exit();
        } else 
        header("location: ./index.php");
        exit();
    }
?>