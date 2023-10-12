<?php
// connect database
include_once("./databaseConfig.php");


// Check If form submitted
if(isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];
    
    


    
// Insert user data into table
    $result = mysqli_query($conn, "INSERT INTO contactus(name, email, mobile, message) 
                                   VALUES('$name','$email','$mobile','$message')");
    

    header("location: ../index.php");
    exit;
    }
    ?>