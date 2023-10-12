<?php

if (isset($_POST["submit"])) {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $username = $_POST["user"];
    $pwd = $_POST["pwd"];
    $repwd = $_POST["repwd"];

    require_once '../config/databaseConfig.php';
    require_once '../config/functions.php';

    $uidExists = uidExists($conn, $username, 'seller');

    if ($uidExists === true) {
        echo '<script>';
            echo 'alert("Username Already Exists!");';
            echo 'window.location.href = window.location.href;';
            echo '</script>';
            exit;
    }
    

    $hashedPwd = hash('sha256', $pwd);

    $sql = "INSERT INTO seller (sellerID, s_username, s_imgLoc, s_fname, s_lname, role, s_password, s_mobile, s_address, s_email) 
            VALUES ('', '$username', 'defaultProfilePic.jpg', '$fname', '$lname', 'seller', '$hashedPwd', '', '', '$email');";
    
    if (mysqli_query($conn, $sql)) {

        $new = mysqli_query($conn, "SELECT *
                                    FROM seller
                                    WHERE s_username='" . $username . "' 
                                     ");

        $row  = mysqli_fetch_array($new);

        session_start();
            $_SESSION["id"] = $row['sellerID'];
            $_SESSION["username"] = $row['s_username'];
            $_SESSION["fname"] = $row['s_fname'];
            $_SESSION["lname"] = $row['s_lname'];
            $_SESSION["email"] = $row['s_email'];
            $_SESSION["role"] = $row['role'];

        header("location: ../index.php");
    }
    else {
        echo "<script>alert ('Something went wrong :-(')</script>";
    }
    mysqli_close($conn);

}
else {
    header("location: ../sellerSignup.php");
}

?>