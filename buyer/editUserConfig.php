<?php
    
    if (isset($_POST["update"])) {
        
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $role = $_POST["role"];
        $id = $_POST["id"];

        include_once("../config/databaseConfig.php");
        
        $sql = mysqli_query($conn, "UPDATE buyer SET
        `b_fname` = '$fname',
        `b_lname` = '$lname',
        `b_email` = '$email',
        `b_username` = '$username',
        `role` = '$role'
        WHERE buyerID='" . $id . "'
        ");

        mysqli_close($conn);

        header("location: ../buyerDashboard.php");

    }
    else {
        header("location: ../index.php");
    }

?>