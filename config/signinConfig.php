<?php
    
    if (isset($_POST["submit"])) {
        $username = $_POST["user"];
        $pwd = $_POST["pwd"];
        $role = $_POST["user_type"];
        
        // DB connection
        include_once("databaseConfig.php");

        // User define functions
        include_once("functions.php");
        
        if ($role === 'buyer') {
            buyerSignin($conn, $username, $pwd);
        } else if ($role === 'seller') {
            sellerSignin($conn, $username, $pwd);
        }
        else {
            header("location: ../signin.php?error=invalidRole");
        }
        
        
    }
    else {
        header("location: ../index.php");
    }

?>