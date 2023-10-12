<?php
// connect database
include_once("./databaseConfig.php");


// Check If form submitted
if(isset($_POST['Submit'])) {
    $title = $_POST['title'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $id = $_POST['seller'];

    
// Insert user data into table
    $result = mysqli_query($conn, "INSERT INTO land(l_title,l_location,l_price,l_imgLoc,sellerID,isSold,l_description) 
                                   VALUES('$title','$location','$price','default','$id',0,'$description')");
    

    header("location: ../sellerDashboard.php");
    exit;
    }
    ?>