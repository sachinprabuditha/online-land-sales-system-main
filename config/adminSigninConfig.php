<?php
    
    if (isset($_POST["submit"])) {
        $username = $_POST["user"];
        $pwd = $_POST["pwd"];

        include_once("databaseConfig.php");
        include_once("functions.php");
        
        $uidExists = uidExists($conn, $username,'admin');

        if ($uidExists === false) {
            echo '<script>';
            echo 'alert("Incorrect Username!");';
            echo 'window.location.href = window.location.href;';
            echo '</script>';
            exit;
        }

        $sql = mysqli_query($conn, "SELECT *
                                        FROM admin
                                        WHERE a_username='" . $username . "'; 
                                        ");
        
        $row  = mysqli_fetch_array($sql);

        $pwdHashed = $row['a_password'];

        if (hash('sha256', $pwd) === $pwdHashed) {
            $checkPwd = true;
        } else {
            $checkPwd = false;
        }

        if ($checkPwd === false) {
            echo '<script>';
            echo 'alert("Incorrect Password!");';
            echo 'window.location.href = window.location.href;';
            echo '</script>';
            exit;
        }

        else if ($checkPwd === true) {
            session_start();
            $_SESSION["id"] = $row['adminID'];
            $_SESSION["username"] = $row['a_username'];
            $_SESSION["fname"] = $row['a_fname'];
            $_SESSION["lname"] = $row['a_lname'];
            $_SESSION["email"] = $row['a_email'];
            $_SESSION["role"] = $row['role'];

            header("location: ../adminDashboard.php");
            exit();

        mysqli_close($conn);
        }
        
    }
    else {
        header("location: ../admin-signin.php");
    }


?>