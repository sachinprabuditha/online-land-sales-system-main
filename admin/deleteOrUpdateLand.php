<?php

if (isset($_POST["delete"])) {

    $id = $_POST["id"];

    include_once("../config/databaseConfig.php");

    $sql = mysqli_query($conn, "DELETE
                                FROM land
                                WHERE landID='" . $id . "' 
                                 ");

    header("location: ../adminDashboard.php");
}
else if (isset($_POST["update"])){

    $id = $_POST["id"];

    header("location: ../updateLand.php?id=$id");
}
else {
    header("location: ../index.php");
}

?>