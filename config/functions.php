<?php

// This function checks if username already in the database
function uidExists($conn, $username, $role) {

    if ($role === 'buyer') {
        $sql = mysqli_query($conn, "SELECT * FROM buyer 
                        WHERE b_username ='" . $username . "';
                        ");  
    } else if ($role === 'seller') {
        $sql = mysqli_query($conn, "SELECT * FROM seller 
                        WHERE s_username ='" . $username . "';
                        ");    
    } else if ($role === 'admin') {
        $sql = mysqli_query($conn, "SELECT * FROM admin
                        WHERE a_username ='" . $username . "';
                        ");    
    }
    
    $row  = mysqli_fetch_array($sql);

    if (is_array($row)) {
        return true;
    }
    else {
        return false;
    }

    mysqli_close($conn);
}
//buyer sign in
function buyerSignin($conn, $username, $pwd) {
    
    $uidExists = uidExists($conn, $username, 'buyer');

    if ($uidExists === false) {
        echo '<script>';
            echo 'alert("Incorrect Username!");';
            echo 'window.location.href = window.location.href;';
            echo '</script>';
            exit;
    }

    $sql = mysqli_query($conn, "SELECT *
                                    FROM buyer
                                    WHERE b_username='" . $username . "';
                                    ");
    
    $row  = mysqli_fetch_array($sql);

    // Get Hashed password
    $pwdHashed = $row['b_password'];

    // Password validation
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
        $_SESSION["id"] = $row['buyerID'];
        $_SESSION["username"] = $row['b_username'];
        $_SESSION["fname"] = $row['b_fname'];
        $_SESSION["lname"] = $row['b_lname'];
        $_SESSION["email"] = $row['b_email'];
        $_SESSION["role"] = $row['role'];

        header("location: ../buyerDashboard.php");
        exit();

    mysqli_close($conn);
    }
        
}
//seller sign in
function sellerSignin($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, 'seller');

        if ($uidExists === false) {
            echo '<script>';
            echo 'alert("Incorrect Username!");';
            echo 'window.location.href = window.location.href;';
            echo '</script>';
            exit;
        }

        $sql = mysqli_query($conn, "SELECT *
                                        FROM seller
                                        WHERE s_username='" . $username . "';
                                        ");
        
        $row  = mysqli_fetch_array($sql);

        $pwdHashed = $row['s_password'];

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
            $_SESSION["id"] = $row['sellerID'];
            $_SESSION["username"] = $row['s_username'];
            $_SESSION["fname"] = $row['s_fname'];
            $_SESSION["lname"] = $row['s_lname'];
            $_SESSION["email"] = $row['s_email'];
            $_SESSION["role"] = $row['role'];

            header("location: ../sellerDashboard.php");
            exit();

        mysqli_close($conn);
        }
        
    }

// This function add new user in to Database
function addUser($conn, $fname, $lname, $email, $username, $pwd, $role) {

    $uidExists = uidExists($conn, $username, $role);

    if ($uidExists === true) {
        echo '<script>';
            echo 'alert("Username Already Exists!");';
            echo 'window.location.href = window.location.href;';
            echo '</script>';
            exit;
    }
    
    
    $hashedPwd = hash('sha256', $pwd);

    if ($role === 'buyer') {
        $sql = "INSERT INTO buyer (buyerID, b_fname, b_lname, b_dob, b_username, b_imgLoc, role, b_password, b_email) 
            VALUES ('', '$fname', '$lname', '', '$username', 'defaultProfilePic.jpg', '$role', '$hashedPwd', '$email');";
    } else if ($role === 'seller') {
        $sql = "INSERT INTO seller (sellerID, s_username, s_imgLoc, s_fname, s_lname, role, s_password, s_mobile, s_address, s_email) 
            VALUES ('', '$username', 'defaultProfilePic.jpg', '$fname', '$lname', '$role', '$hashedPwd', '', '', '$email');";
    } else if ($role === 'admin') {
        $sql = "INSERT INTO Admin (adminID, a_fname, a_lname, a_username, a_imgLoc, role, a_password, a_email) 
            VALUES ('', '$fname', '$lname', '$username', 'defaultProfilePic.jpg', 'admin', '$hashedPwd', '$email');";
    }

    
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert ('Successfully Sign Up')</script>";
        header("location: ../adminDashboard.php");
    }
    else {
        echo "<script>alert ('Something went wrong :-(')</script>";
    }

    mysqli_close($conn);
}

// Get User Deatails
function getUserDetails($conn, $id, $role) {

    if ($role === 'buyer') {
        $sql = mysqli_query($conn, "SELECT *
                                    FROM buyer
                                    WHERE buyerID='" . $id . "' 
                                     ");
    } else if ($role === 'seller') {
        $sql = mysqli_query($conn, "SELECT *
                                    FROM seller
                                    WHERE sellerID='" . $id . "' 
                                     ");
    } else if ($role === 'admin') {
        $sql = mysqli_query($conn, "SELECT *
                                    FROM admin
                                    WHERE adminID='" . $id . "' 
                                     ");
    }
    
       
    $row  = mysqli_fetch_array($sql);

    mysqli_close($conn);

    return $row;
}

// delete user
function deleteUser($conn, $id, $role) {

    if ($role === 'buyer') {
        $sql = mysqli_query($conn, "DELETE
                                FROM buyer
                                WHERE buyerID='" . $id . "' 
                                 ");
    } else if($role === 'seller') {
        $sql = mysqli_query($conn, "DELETE
                                FROM seller
                                WHERE sellerID='" . $id . "' 
                                 ");
    } else if($role === 'admin') {
        $sql = mysqli_query($conn, "DELETE
                                FROM admin
                                WHERE adminID='" . $id . "' 
                                 ");
    }

    mysqli_close($conn);
}

// Update User Deatails
function updateUserDetails($conn, $fname, $lname, $email, $username, $role, $id) {

    if ($role === 'buyer') {
        $sql = mysqli_query($conn, "UPDATE buyer SET
        `b_fname` = '$fname',
        `b_lname` = '$lname',
        `b_email` = '$email',
        `b_username` = '$username',
        `role` = '$role'
        WHERE buyerID='" . $id . "'
        ");
    } else if($role === 'seller') {
        $sql = mysqli_query($conn, "UPDATE seller SET
        `s_fname` = '$fname',
        `s_lname` = '$lname',
        `s_email` = '$email',
        `s_username` = '$username',
        `role` = '$role'
        WHERE sellerID='" . $id . "'
        ");
    } else if($role === 'admin') {
        $sql = mysqli_query($conn, "UPDATE admin SET
        `a_fname` = '$fname',
        `a_lname` = '$lname',
        `a_email` = '$email',
        `a_username` = '$username',
        `role` = '$role'
        WHERE adminID='" . $id . "'
        ");
    }

    mysqli_close($conn);
}

?>