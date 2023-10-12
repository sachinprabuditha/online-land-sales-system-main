<?php
    
    if (isset($_POST["update"])) {
        
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $role = $_POST["role"];
        $id = $_POST["id"];

        include_once("../config/databaseConfig.php");
        include_once("../config/functions.php");
        
        updateUserDetails($conn, $fname, $lname, $email, $username, $role, $id);

        header("location: ../adminDashboard.php");
        
    }
    else {
        header("location: ../index.php");
    }

?>