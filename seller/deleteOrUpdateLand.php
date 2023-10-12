<?php

if (isset($_POST["delete"])) {

    $id = $_POST["id"];

    include_once("../config/databaseConfig.php");

    $sql = mysqli_query($conn, "DELETE
                                FROM land
                                WHERE landID='" . $id . "' 
                                 ");

    mysqli_close($conn);        
                         
    header("location: ../sellerDashboard.php");
}
else if (isset($_POST["update"])){

    $id = $_POST["id"];

    header("location: ../sellerUpdateLand.php?id=$id");
}
else {
    header("location: ../index.php");
}

?>