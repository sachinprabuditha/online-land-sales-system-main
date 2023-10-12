<?php

if (isset($_POST["Responded"])) {

    $id = $_POST["id"];

    include_once("../config/databaseConfig.php");

    $sql = mysqli_query($conn, "DELETE
                                FROM contactus
                                WHERE conUsID='" . $id . "' 
                                 ");

    header("location: ../adminDashboard.php");
}

?>