<?php
    
    if (isset($_POST["update"])) {
        
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $role = $_POST["role"];
        $id = $_POST["id"];

        include_once("../config/databaseConfig.php");
        
        $sql = mysqli_query($conn, "UPDATE seller SET
                                    `s_fname` = '$fname',
                                    `s_lname` = '$lname',
                                    `s_email` = '$email',
                                    `s_username` = '$username',
                                    `role` = '$role'
                                    WHERE sellerID='" . $id . "'
                            ");

        mysqli_close($conn);

        header("location: ../sellerDashboard.php");

    }
    else {
        header("location: ../index.php");
    }

?>