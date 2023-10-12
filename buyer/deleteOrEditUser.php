<?php

if (isset($_POST["delete"])) {

    $id = $_POST["id"];
    $role = $_POST["role"];

    include_once("../config/databaseConfig.php");

    $sql = mysqli_query($conn, "DELETE
                                FROM buyer
                                WHERE buyerID='" . $id . "' 
                                 ");
    
    mysqli_close($conn);

    session_start();
    session_unset();
    session_destroy();
    
    header("location: ../index.php");
    exit();
}
else if (isset($_POST["edit"])){

    $id = $_POST["id"];
    $role = $_POST["role"];

    header("location: ../editBuyer.php?id=$id&role=$role");
}
else {
    header("location: ../index.php");
}

?>